from flask import Flask, render_template, request
import masterfinger
import facemark
import hashlib
import base64
import datetime
from pyblake2 import blake2b

app = Flask(__name__)


@app.route('/')
def index():
    return render_template("echo.html")


@app.route('/biometric', methods=['POST'])
def biometric():
    tym = datetime.datetime.now()
    print(tym)
    tym = str(tym)
    bad_chars = ['.', ':', '-', '.']
    for p in bad_chars:
        tym = tym.replace(p, '')
    f = tym[9:15]
    img = request.files['fing']
    faceimg = request.files['face']
    img_file = img.filename
    faceimg_file = faceimg.filename
    xkey, ykey = masterfinger.master(img_file)
    fpkey, fskey = facemark.facialmark(faceimg_file)
    xkey = str(xkey)
    ykey = str(ykey)
    fpkey = str(fpkey)
    fskey = str(fskey)
    for i in bad_chars:
        a = str(xkey.replace(i, ''))
    for j in bad_chars:
        b = str(ykey.replace(j, ''))
    for i1 in bad_chars:
        c = str(fpkey.replace(i1, ''))
    for j1 in bad_chars:
        d = str(fskey.replace(j1, ''))

    a = a[0:6]
    b = b[0:6]
    c = c[0:6]
    d = d[0:6]

    uni = str(c) + str(a)
    uni = str(uni) + str(f)
    for s in bad_chars:
        uni = uni.replace(s, '')
    e = uni.encode()
    uni1 = str(f) + str(d)
    uni1 = str(uni1) + str(b)
    for r in bad_chars:
        uni1 = uni1.replace(r, '')
    f = uni1.encode()
    h = blake2b(e, 20).hexdigest()
    h1 = blake2b(f, 20).hexdigest()
    # h.update(uni)
    # s=h.hexdigest()
    return render_template("biokeys.php", key_x=xkey, key_y=ykey, Fp=fpkey, Fs=fskey, U1=uni, U2=uni1, H1=h, H2=h1)


if __name__ == "__main__":
    app.run(debug=True)
