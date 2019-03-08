import imageio
import matplotlib.pyplot as plt
import numpy as np
from mlxtend.image import extract_face_landmarks


def facialmark(name):
    image = "faces/" + name
    img = imageio.imread(image)
    landmarks = extract_face_landmarks(img)

    fig = plt.figure(figsize=(15, 5))
    ax = fig.add_subplot(1, 3, 1)
    ax.imshow(img)
    ax = fig.add_subplot(1, 3, 2)
    ax.scatter(landmarks[:, 0], -landmarks[:, 1], alpha=0.8)
    ax = fig.add_subplot(1, 3, 3)
    img2 = img.copy()
    for p in landmarks:
        img2[p[1] - 3:p[1] + 3, p[0] - 3:p[0] + 3, :] = (120, 20, 255)
    ax.imshow(img2)
    plt.show()

    eleft = np.array([36, 37, 38, 39, 40, 41])
    eright = np.array([42, 43, 44, 45, 46, 47])
    nose = np.array([27, 28, 29, 30, 31, 32, 33, 34, 35])
    mouth = np.array([48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67])

    fig = plt.figure(figsize=(8, 8))
    plt.plot(landmarks[:, 0], -landmarks[:, 1], 'ro', markersize=7, alpha=0.9)
    for i in range(landmarks.shape[0]):
        plt.text(landmarks[i, 0] + 1, -landmarks[i, 1], str(i), size=14)

    left_eye = np.mean(landmarks[eleft], axis=0)
    right_eye = np.mean(landmarks[eright], axis=0)
    nose_m = np.mean(landmarks[nose], axis=0)
    mouth_m = np.mean(landmarks[mouth], axis=0)

    plt.plot([left_eye[0]], [-left_eye[1]],
             marker='*', color='black', markersize=10, mew=3)

    plt.plot([right_eye[0]], [-right_eye[1]],
             marker='*', color='black', markersize=10, mew=3)

    plt.plot([nose_m[0]], [-nose_m[1]],
             marker='*', color='black', markersize=10, mew=3)

    plt.plot([mouth_m[0]], [-mouth_m[1]],
             marker='*', color='black', markersize=10, mew=3)

    plt.xticks([])
    plt.yticks([])

    plt.show()

    primary = left_eye[0] + right_eye[0] + nose_m[0] + mouth_m[0]
    secondary = left_eye[1] + right_eye[1] + nose_m[1] + mouth_m[1]

    return  primary, secondary
