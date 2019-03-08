import math
import numpy as np
import scipy.ndimage
import cv2
from scipy import signal
from scipy import ndimage
import skimage.morphology
import skimage
import scipy
from skimage.morphology import convex_hull_image, erosion
from skimage.morphology import square

def master(image):
    # image = input("Enter image name : [1-1000]\n")
    img = "finger/" + image

    def frequest(im, orientim, windsze, minWaveLength, maxWaveLength):
        rows, cols = np.shape(im)
        cosorient = np.mean(np.cos(2 * orientim))
        sinorient = np.mean(np.sin(2 * orientim))
        orient = math.atan2(sinorient, cosorient) / 2
        rotim = scipy.ndimage.rotate(im, orient / np.pi * 180 + 90, axes=(1, 0), reshape=False, order=3, mode='nearest')
        cropsze = int(np.fix(rows / np.sqrt(2)))
        offset = int(np.fix((rows - cropsze) / 2))
        rotim = rotim[offset:offset + cropsze][:, offset:offset + cropsze]
        proj = np.sum(rotim, axis=0)
        dilation = scipy.ndimage.grey_dilation(proj, windsze, structure=np.ones(windsze))
        temp = np.abs(dilation - proj)
        peak_thresh = 2
        maxpts = (temp < peak_thresh) & (proj > np.mean(proj))
        maxind = np.where(maxpts)
        rows_maxind, cols_maxind = np.shape(maxind)
        if (cols_maxind < 2):
            freqim = np.zeros(im.shape)
        else:
            NoOfPeaks = cols_maxind
            waveLength = (maxind[0][cols_maxind - 1] - maxind[0][0]) / (NoOfPeaks - 1)
            if waveLength >= minWaveLength and waveLength <= maxWaveLength:
                freqim = 1 / np.double(waveLength) * np.ones(im.shape)
            else:
                freqim = np.zeros(im.shape)
        return (freqim)

    def normalise(img, mean, std):
        normed = (img - np.mean(img)) / (np.std(img))
        return (normed)

    def ridge_segment(im, blksze, thresh):
        rows, cols = im.shape
        im = normalise(im, 0, 1)
        new_rows = np.int(blksze * np.ceil((np.float(rows)) / (np.float(blksze))))
        new_cols = np.int(blksze * np.ceil((np.float(cols)) / (np.float(blksze))))
        padded_img = np.zeros((new_rows, new_cols))
        stddevim = np.zeros((new_rows, new_cols))
        padded_img[0:rows][:, 0:cols] = im
        for i in range(0, new_rows, blksze):
            for j in range(0, new_cols, blksze):
                block = padded_img[i:i + blksze][:, j:j + blksze]
                stddevim[i:i + blksze][:, j:j + blksze] = np.std(block) * np.ones(block.shape)
        stddevim = stddevim[0:rows][:, 0:cols]
        mask = stddevim > thresh
        mean_val = np.mean(im[mask])
        std_val = np.std(im[mask])
        normim = (im - mean_val) / (std_val)

        return (normim, mask)

    def orient(im, gradientsigma, blocksigma, orientsmoothsigma):
        rows, cols = im.shape
        sze = np.fix(6 * gradientsigma)
        if np.remainder(sze, 2) == 0:
            sze = sze + 1
        gauss = cv2.getGaussianKernel(np.int(sze), gradientsigma)
        f = gauss * gauss.T
        fy, fx = np.gradient(f)
        Gx = signal.convolve2d(im, fx, mode='same')
        Gy = signal.convolve2d(im, fy, mode='same')
        Gxx = np.power(Gx, 2)
        Gyy = np.power(Gy, 2)
        Gxy = Gx * Gy
        sze = np.fix(6 * blocksigma)
        gauss = cv2.getGaussianKernel(np.int(sze), blocksigma)
        f = gauss * gauss.T
        Gxx = ndimage.convolve(Gxx, f)
        Gyy = ndimage.convolve(Gyy, f)
        Gxy = 2 * ndimage.convolve(Gxy, f)
        denom = np.sqrt(np.power(Gxy, 2) + np.power((Gxx - Gyy), 2)) + np.finfo(float).eps
        sin2theta = Gxy / denom
        cos2theta = (Gxx - Gyy) / denom
        if orientsmoothsigma:
            sze = np.fix(6 * orientsmoothsigma)
            if np.remainder(sze, 2) == 0:
                sze = sze + 1
            gauss = cv2.getGaussianKernel(np.int(sze), orientsmoothsigma)
            f = gauss * gauss.T
            cos2theta = ndimage.convolve(cos2theta, f)  # Smoothed sine and cosine of
            sin2theta = ndimage.convolve(sin2theta, f)  # doubled angles
        orientim = np.pi / 2 + np.arctan2(sin2theta, cos2theta) / 2
        return (orientim)

    # noinspection PyTypeChecker
    def gabor_filter(im, orient, freq, kx, ky):
        angleInc = 3
        im = np.double(im)
        rows, cols = im.shape
        newim = np.zeros((rows, cols))
        freq_1d = np.reshape(freq, (1, rows * cols))
        ind = np.where(freq_1d > 0)
        ind = np.array(ind)
        ind = ind[1, :]
        non_zero_elems_in_freq = freq_1d[0][ind]
        non_zero_elems_in_freq = np.double(np.round((non_zero_elems_in_freq * 100))) / 100
        unfreq = np.unique(non_zero_elems_in_freq)
        sigmax = 1 / unfreq[0] * kx
        sigmay = 1 / unfreq[0] * ky
        sze = np.round(3 * np.max([sigmax, sigmay]))
        x, y = np.meshgrid(np.linspace(-sze, sze, (2 * sze + 1)), np.linspace(-sze, sze, (2 * sze + 1)))
        reffilter = np.exp(-(((np.power(x, 2)) / (sigmax * sigmax) + (np.power(y, 2)) / (sigmay * sigmay)))) * np.cos(
            2 * np.pi * unfreq[0] * x)
        filt_rows, filt_cols = reffilter.shape
        gabor_filter = np.array(np.zeros((int(180 / angleInc), int(filt_rows), int(filt_cols))))
        for o in range(0, int(180 / angleInc)):
            rot_filt = scipy.ndimage.rotate(reffilter, -(o * angleInc + 90), reshape=False)
            gabor_filter[o] = rot_filt
        maxsze = int(sze)
        temp = freq > 0
        validr, validc = np.where(temp)
        temp1 = validr > maxsze
        temp2 = validr < rows - maxsze
        temp3 = validc > maxsze
        temp4 = validc < cols - maxsze
        final_temp = temp1 & temp2 & temp3 & temp4
        finalind = np.where(final_temp)
        maxorientindex = np.round(180 / angleInc)
        orientindex = np.round(orient / np.pi * 180 / angleInc)
        for i in range(0, rows):
            for j in range(0, cols):
                if (orientindex[i][j] < 1):
                    orientindex[i][j] = orientindex[i][j] + maxorientindex
                if (orientindex[i][j] > maxorientindex):
                    orientindex[i][j] = orientindex[i][j] - maxorientindex
        finalind_rows, finalind_cols = np.shape(finalind)
        sze = int(sze)
        for k in range(0, finalind_cols):
            r = validr[finalind[0][k]]
            c = validc[finalind[0][k]]
            img_block = im[r - sze:r + sze + 1][:, c - sze:c + sze + 1]
            newim[r][c] = np.sum(img_block * gabor_filter[int(orientindex[r][c]) - 1])
        return (newim)

    def freqq(im, mask, orient, blksze, windsze, minWaveLength, maxWaveLength):
        rows, cols = im.shape
        freq = np.zeros((rows, cols))
        for r in range(0, rows - blksze, blksze):
            for c in range(0, cols - blksze, blksze):
                blkim = im[r:r + blksze][:, c:c + blksze]
                blkor = orient[r:r + blksze][:, c:c + blksze]
                freq[r:r + blksze][:, c:c + blksze] = frequest(blkim, blkor, windsze, minWaveLength, maxWaveLength)
        freq = freq * mask
        freq_1d = np.reshape(freq, (1, rows * cols))
        ind = np.where(freq_1d > 0)
        ind = np.array(ind)
        ind = ind[1, :]
        non_zero_elems_in_freq = freq_1d[0][ind]
        meanfreq = np.mean(non_zero_elems_in_freq)
        medianfreq = np.median(non_zero_elems_in_freq)
        return (freq, meanfreq)

    def enhance(img):
        blksze = 16
        thresh = 0.1
        normim, mask = ridge_segment(img, blksze, thresh)
        gradientsigma = 1
        blocksigma = 7
        orientsmoothsigma = 7
        orientim = orient(normim, gradientsigma, blocksigma, orientsmoothsigma)
        blksze = 38
        windsze = 5
        minWaveLength = 5
        maxWaveLength = 15
        freq, medfreq = freqq(normim, mask, orientim, blksze, windsze, minWaveLength, maxWaveLength)
        freq = medfreq * mask
        kx = 0.65
        ky = 0.65
        newim = gabor_filter(normim, orientim, freq, kx, ky)
        return (newim < -3)

    def main(img_name):
        # print("\nloading sample image")
        # img_name = '7.png'
        img = scipy.ndimage.imread(img_name, 1)
        rows, cols = np.shape(img)
        aspect_ratio = np.double(rows) / np.double(cols)
        new_rows = 350
        new_cols = new_rows / aspect_ratio
        img = scipy.misc.imresize(img, (np.int(new_rows), np.int(new_cols)))
        img11 = enhance(img)
        # print('saving the image')
        scipy.misc.imsave('filterimg1.jpg', img11)

    def getpoints(img, mask):
        img = img == 255
        (rows, cols) = img.shape
        Term = np.zeros(img.shape)
        Bif = np.zeros(img.shape)
        aa = (cols - 100) / 2
        for i in range(125, rows - 125):
            for j in range(100, cols - 100):
                if (img[i][j] == 1):
                    block = img[i - 1:i + 2, j - 1:j + 2]
                    block_val = np.sum(block)
                    if (block_val == 2):
                        Term[i, j] = 1
                    elif (block_val == 4):
                        Bif[i, j] = 1
        mask = convex_hull_image(mask > 0)
        mask = erosion(mask, square(5))
        minutiaeTerm = np.uint8(mask) * Term
        return (Term, Bif)

    def BadMinutiae(minutiaeList, img, thresh):
        img = img * 0
        SpuriousMin = []
        numPoints = len(minutiaeList)
        D = np.zeros((numPoints, numPoints))
        for i in range(1, numPoints):
            for j in range(0, i):
                (X1, Y1) = minutiaeList[i]['centroid']
                (X2, Y2) = minutiaeList[j]['centroid']
                dist = np.sqrt((X2 - X1) ** 2 + (Y2 - Y1) ** 2)
                D[i][j] = dist
                if (dist < thresh):
                    SpuriousMin.append(i)
                    SpuriousMin.append(j)
        SpuriousMin = np.unique(SpuriousMin)
        for i in range(0, numPoints):
            if (not i in SpuriousMin):
                (X, Y) = np.int16(minutiaeList[i]['centroid'])
                img[X, Y] = 1
        img = np.uint8(img)
        return (img)

    def mainc():
        img = cv2.imread('filterimg1.jpg', 0)
        # cv2.imshow('assadaad',img);
        img = np.uint8(img > 128)
        # cv2.imshow('assadd',img);
        skel = skimage.morphology.skeletonize(img)
        skel = np.uint8(skel) * 255
        # cv2.imshow('assadd',skel);
        mask = img * 255
        (Term, Bif) = getpoints(skel, mask)

        # cv2.imshow('assdd',minutiaeTerm);
        # cv2.imshow('assdasdd',minutiaeBif);
        Term = skimage.measure.label(Term, 8)
        RP = skimage.measure.regionprops(Term)
        Term = BadMinutiae(RP, np.uint8(img), 10)
        BifLabel = skimage.measure.label(Bif, 8)
        TermLabel = skimage.measure.label(Term, 8)
        Bif = Bif * 0
        Term = Term * 0

        (rows, cols) = skel.shape
        DispImg = np.zeros((rows, cols, 3), np.uint8)
        DispImg[:, :, 0] = skel
        DispImg[:, :, 1] = skel
        DispImg[:, :, 2] = skel
        RP = skimage.measure.regionprops(BifLabel)
        x = []
        y = []
        x1 = []
        y1 = []
        for i in RP:
            (row, col) = np.int16(np.round(i['Centroid']))
            x.append(col)
            y.append(row)

            Bif[row, col] = 1
            # print row, col, '\n\n'
            (rr, cc) = skimage.draw.circle_perimeter(row, col, 3)
            skimage.draw.set_color(DispImg, (rr, cc), (255, 0, 0))
        RP = skimage.measure.regionprops(TermLabel)
        for i in RP:
            (row, col) = np.int16(np.round(i['Centroid']))
            Term[row, col] = 1
            x1.append(col)
            y1.append(row)
            (rr, cc) = skimage.draw.circle_perimeter(row, col, 3)
            skimage.draw.set_color(DispImg, (rr, cc), (0, 0, 255))
        # print('saving the image')
        # print x,'\n\n'
        # print y,'\n\n'
        # print x1,'\n\n'
        # print y1,'\n\n'
        scipy.misc.imsave('image4.png', DispImg)
        # cv2.waitKey(0)

        return x, y, x1, y1

    main(img)
    (x, y, x1, y1) = mainc()

    # print x,'\n\n'
    # print y,'\n\n'
    # print x1,'\n\n'
    # print y1,'\n\n'
    dis1 = 0
    dis2 = 0
    for i in range(len(x)):
        for j in range(len(x)):
            temp1 = (x[i] - x[j]) ** 2
            temp2 = (y[i] - y[j]) ** 2
            temp3 = temp1 + temp2
            dis1 += math.sqrt(temp3)

    for i in range(len(x1)):
        for j in range(len(x1)):
            temp1 = (x1[i] - x1[j]) ** 2
            temp2 = (y1[i] - y1[j]) ** 2
            temp3 = temp1 + temp2
            dis2 += math.sqrt(temp3)
    Key_1 = str(dis1)
    Key_2 = str(dis2)
    return Key_1, Key_2


