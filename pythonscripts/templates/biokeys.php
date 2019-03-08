<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!link rel="stylesheet" type="text/css" href="css/key.css">
    <!link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='key.css')}}">
    <link rel="shortcut icon" href="logo/logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>KEY</title>
    <script>
        function copyClipboard(c_ID) {
          
          if (window.getSelection) {
          var range = document.createRange();
          range.selectNode(document.getElementById(c_ID));
          window.getSelection().addRange(range);
          document.execCommand("copy");
          setTimeout("location.reload(true);", 1);
          }
      }
    </script>
    <style type="text/css">

.beer {
  font-size: 24px;
  margin: 21px 0px 0px -3px;
}

.card {
  font-size: 28px;
  margin: 21px 0px 0px -3px;
}

.text-input {
  position: relative;
  margin-top: 5px;
  margin-bottom: 20px;
}
.text-input input[type="text"] {
  display: inline-block;
  width: 400px;
  height: 40px;
  box-sizing: border-box;
  outline: none;
  border: 3px solid black;
  border-radius: 3px;
  padding: 10px 10px 10px 70px;
  transition: all 0.1s ease-out;
}
.text-input input[type="text"] + label {
  position: absolute;
  top: -18px;
  left: -10px;
  bottom: 0;
  height: 70px;
  line-height: 60px;
  color: white;
  border-radius: 50%;
  padding: 0 20px;
  background: #00994d;
  transform: translateZ(0) translateX(0);
  transition: all 0.3s ease-in;
  transition-delay: 0.2s;
}

.btnLightBlue.btnPush {
  box-shadow: 0px 5px 0px 0px black;
}

.sty{
font-family: Josefin Slab;
}

.btnPush:hover {
  margin-top: 15px;
  margin-bottom: 5px;
}

.btnLightBlue.btnPush:hover {
  box-shadow: 0px 0px 0px 0px #1E8185;
}


div.het {
  position:relative;
  width: 100%;
  margin-top: 10px;
  display: flex;
  align-items: center;
}
.title {
  text-align:center;
  font-size: 24px;
  font-family:Belgrano;
  width: 80%;
}
.line {
  display: inline-block;
  width: 38%;
  height: 2px;
  background-color: #000;
}
.dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color: #000;
  border-radius: 50%;
  margin: 0 10px;
  align-items: center;
}


input[type="submit"],
input[type="submit"]:visited {
  text-decoration: none;
  color: #00AE68;
}

.clear {
  clear: both;
}


input[type="submit"].button {
  display: inline-block;
  position: relative;
  float: left;
  width: 200px;
  font-family: Josefin Slab;
  font-size: 20px;
  padding: 0;
  margin: 10px 20px 10px 0;
  font-weight: 600;
  text-align: center;
  line-height: 50px;
  color: #000;
  border:2px solid black;
  border-radius: 5px;
  transition: all 0.2s ;
  float:right;
}

.btnLightBlue {
  background: white;
}

.iconcircle {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50px;
    width: 50px;
    border:2px solid #00994d;
    background-color: #00994d;
    overflow: hidden;
    border-radius: 50%;
    cursor: pointer;
    margin: 0 auto;
}

.iconcircle .shadowicon {
    color: #fff;
    font-size: 26px;

}

.iconcircle .shadowicon:hover {
    color: #000;
    font-size: 26px;
}

.iconcircle:hover {
border:2px solid black;
}
.f-half{
height: 100%;
width: 50%;
position: fixed;
left:0;

}

.s-half{
height: 100%;
width: 50%;
position: fixed;
right:0;

}

    </style>
</head>
<body>
<div class="f-half">
                    <!-- Modal -->
                            <div class="modal-dialog " >
                        <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <div class="het" style="">
                                        <span class="line"></span>
                                        <span class="dot"></span>
                                        <span class="title">BIOMETRIC KEYS  PRIMARY</span>
                                        <span class="dot"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
      <div class="modal-body">
     <table class="table table-striped">
    <tbody>
     <tr>
     <td colspan="1">
    <form  name="finupload" id="finupload" method="post" enctype="multipart/form-data">
         <fieldset>

                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">FINGERPRINT</legend>
                          </label>
                    <div class="col-sm-6">
                        <div class="text-input">
                            <input type="text" id="input1" name="input1" value="{{key_x}}">
                            <label for="input1"><i class="fas fa-fingerprint beer" ></i></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">

                          <label class="col-md-8 control-label ">
                                <legend class="sty">FACE</legend>
                          </label>

                    <div class="col-sm-6">
                        <div class="text-input">
                            <input type="text" id="input2" name="input2" value="{{Fp}}">
                            <label for="input1"><i class="fa fa-user-alt beer" ></i></label>
                        </div>
                    </div>
                </div>

                <div class="row"></div>

                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">UNIQUE ID</legend>
                          </label>
                    <br>
                    <div class="col-sm-10">
                        <div class="text-input" id="u">
                            <input type="text" name="input3" id="input3" value="{{U1}}">
                            <label for="input1"><i class="fa fa-id-badge card" ></i></label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                         <button  type="submit" id="elementId" class="iconcircle" name="reg">
                            <i class="fa fa-clipboard shadowicon" onclick="copyClipboard('u')" ></i></button>
                    </div>
                </div>

                <div class="row"></div>

                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">HASH</legend>
                          </label>
                    <br>
                    <div class="col-sm-10">
                        <div class="text-input" id="h">
                            <input type="text" id="input4" name="input4" value="{{H1}}">
                            <label for="input2"><i class="fa fa-hashtag beer" ></i></label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                         <button  type="submit" id="elementId" class="iconcircle" name="reg">
                            <i class="fa fa-clipboard shadowicon" onclick="copyClipboard('h')" ></i></button>
                    </div>
                </div>

             </fieldset>
    </form>
     </td>
     </tr>
    </tbody>
    </table>
    </div>
    </div>
     </div>
</div>


<div class="s-half">
                    <!-- Modal -->
                            <div class="modal-dialog " >
                        <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <div class="het" style="">
                                        <span class="line"></span>
                                        <span class="dot"></span>
                                        <span class="title">BIOMETRIC KEYS  SECONDARY</span>
                                        <span class="dot"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
      <div class="modal-body">
     <table class="table table-striped">
    <tbody>
     <tr>
     <td colspan="1">
    <form action="" name="finupload" id="finupload" method="post" enctype="multipart/form-data">
         <fieldset>

                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">FINGERPRINT</legend>
                          </label>
                    <div class="col-sm-6">
                        <div class="text-input">
                            <input type="text" id="input10" value="{{key_y}}">
                            <label for="input1"><i class="fas fa-fingerprint beer" ></i></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">

                          <label class="col-md-8 control-label ">
                                <legend class="sty">FACE</legend>
                          </label>

                    <div class="col-sm-6">
                        <div class="text-input">
                            <input type="text" id="input0" value="{{Fs}}">
                            <label for="input1"><i class="fa fa-user-alt beer" ></i></label>
                        </div>
                    </div>
                </div>

                <div class="row"></div>

                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">UNIQUE ID</legend>
                          </label>
                    <br>
                    <div class="col-sm-10">
                        <div class="text-input" id="u2">
                            <input type="text" id="in0"  name="in0" value="{{U2}}">
                            <label for="input3"><i class="fa fa-id-badge card" ></i></label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                         <button  type="submit" id="elementId" class="iconcircle" name="reg">
                            <i class="fa fa-clipboard shadowicon" onclick="copyClipboard('u2')" ></i></button>
                    </div>
                </div>

                <div class="row"></div>

                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">HASH</legend>
                          </label>
                    <br>
                    <div class="col-sm-10">
                        <div class="text-input" id="h2">
                            <input type="text" id="in10" name="in10" value="{{H2}}">
                            <label for="input4"><i class="fa fa-hashtag beer" ></i></label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                         <button  type="submit" id="elementId0" class="iconcircle">
                            <i class="fa fa-clipboard shadowicon" onclick="copyClipboard('h2')" ></i></button>
                    </div>
                </div>
             </fieldset>
    </form>
     </td>
     </tr>
    </tbody>
    </table>
    </div>
    </div>
     </div>
</div>


</body>
</html>

