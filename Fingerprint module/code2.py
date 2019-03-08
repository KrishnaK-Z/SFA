import cv2
import numpy as np
import skimage.morphology
import skimage
import scipy
from skimage.morphology import convex_hull_image, erosion
from skimage.morphology import square

def getpoints(img, mask):
    img = img == 255;     
    (rows, cols) = img.shape;
    Term = np.zeros(img.shape);
    Bif = np.zeros(img.shape);
    aa=(cols-100)/2
    for i in range(125,rows-125):
        for j in range(100,cols-100):
            if(img[i][j] == 1):
                block = img[i-1:i+2,j-1:j+2];
                block_val = np.sum(block);
                if(block_val == 2):
                    Term[i,j] = 1;
                elif(block_val == 4):
                    Bif[i,j] = 1;
    mask = convex_hull_image(mask>0)   
    mask = erosion(mask, square(5))     
    minutiaeTerm = np.uint8(mask)*Term
    return(Term, Bif) 

def BadMinutiae(minutiaeList, img, thresh):
    img = img * 0;
    SpuriousMin = [];
    numPoints = len(minutiaeList);
    D = np.zeros((numPoints, numPoints))
    for i in range(1,numPoints):
        for j in range(0, i):
            (X1,Y1) = minutiaeList[i]['centroid']
            (X2,Y2) = minutiaeList[j]['centroid']            
            dist = np.sqrt((X2-X1)**2 + (Y2-Y1)**2);
            D[i][j] = dist
            if(dist < thresh):
                SpuriousMin.append(i)
                SpuriousMin.append(j)                
    SpuriousMin = np.unique(SpuriousMin)
    for i in range(0,numPoints):
        if(not i in SpuriousMin):
            (X,Y) = np.int16(minutiaeList[i]['centroid']);
            img[X,Y] = 1;    
    img = np.uint8(img);
    return(img)


def main():
	
    img = cv2.imread('filterimg1.jpg',0);
    #cv2.imshow('assadaad',img);
    img = np.uint8(img>128);    
    #cv2.imshow('assadd',img);
    skel = skimage.morphology.skeletonize(img)
    skel = np.uint8(skel)*255;
    #cv2.imshow('assadd',skel);
    mask = img*255;    
    (Term, Bif) = getpoints(skel, mask);
    
    #cv2.imshow('assdd',minutiaeTerm);
    #cv2.imshow('assdasdd',minutiaeBif);
    Term = skimage.measure.label(Term, 8);
    RP = skimage.measure.regionprops(Term)
    Term = BadMinutiae(RP, np.uint8(img), 10);    
    BifLabel = skimage.measure.label(Bif, 8);
    TermLabel = skimage.measure.label(Term, 8);    
    Bif = Bif * 0;
    Term = Term * 0;   
    
    (rows, cols) = skel.shape
    DispImg = np.zeros((rows,cols,3), np.uint8)
    DispImg[:,:,0] = skel; DispImg[:,:,1] = skel; DispImg[:,:,2] = skel;    
    RP = skimage.measure.regionprops(BifLabel)
    x=[]
    y=[]
    x1=[]
    y1=[]
    for i in RP:
        (row, col) = np.int16(np.round(i['Centroid']))
        x.append(col);
        y.append(row);
        
        Bif[row, col] = 1;
        #print row, col, '\n\n'
        (rr, cc) = skimage.draw.circle_perimeter(row, col, 3);
        skimage.draw.set_color(DispImg, (rr,cc), (255,0,0));    
    RP = skimage.measure.regionprops(TermLabel)
    for i in RP:
        (row, col) = np.int16(np.round(i['Centroid']))
        Term[row, col] = 1;
        x1.append(col);
        y1.append(row);
        (rr, cc) = skimage.draw.circle_perimeter(row, col, 3);
        skimage.draw.set_color(DispImg, (rr,cc), (0, 0, 255));
    #print('saving the image')
    #print x,'\n\n'
    #print y,'\n\n'
    #print x1,'\n\n'
    #print y1,'\n\n'
    scipy.misc.imsave('image4.png',DispImg);
    #cv2.waitKey(0)
    
   
    return (x,y,x1,y1);
    
    

