<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="logo/icon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="css/bioupload.css">
        <!link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='bioupload.css')}}">
        <title>
            UIDpy
        </title>
    </head>
    <body>
<!-- Modal -->
                            <div class="modal-dialog modal-lg" >
                        <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <div class="het" style="">
                                        <span class="line"></span>
                                        <span class="dot"></span>
                                        <span class="title">UPLOAD  BIOMETRIC FILES</span>
                                        <span class="dot"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                                <div class="modal-body">
                                     <table class="table table-striped">
    <tbody>
     <tr>
     <td colspan="1">
    <form action="http://localhost:5000/biometric" name="finupload" id="finupload" method="post" enctype="multipart/form-data">
         <fieldset>
        <div class="form-group">
                 <div class="text-input">
                    <input type="text" id="input1" value="A991" readonly>
                    <label for="input1">EID</label>
                </div>
            </div>
        <br><br>
                <div class="form-group">
                          <label class="col-md-8 control-label">
                                <legend class="sty">FINGERPRINT</legend>
                          </label>
                    <br>
                    <div class="col-sm-6">
                        <div class="file-upload" >
                            <div class="file-select">
                                <div class="file-select-button" id="fileName">Select File</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div>
                                <input type="file" name="fing" id="fing" onchange="reURL(this);">
                                <div class="pull-right"><i class="material-icons" id="murder">fingerprint</i></div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="row">

                 </div>
                <div class="form-group">
                    <br/><br/>
                          <label class="col-md-8 control-label ">
                                <legend class="sty">FACE</legend>
                          </label>
                    <br>
                    <div class="col-sm-6">
                        <div class="file-upload1">
                            <div class="file-select1">
                                <div class="file-select1-button" id="fileName1">Select File</div>
                                <div class="file-select1-name" id="noFile1">No file chosen...</div>
                                <input type="file" name="face" id="face" onclick="rURL(this);">
                                <div class="pull-right"><i class="material-icons" id="murd">mood</i></div>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="wrapper">
            <input type="submit"  class="button btnPush btnLightBlue " value="Submit" />
        </div>
             </fieldset>
    </form>
     </td>
     </tr>
    </tbody>
    </table>
    </div>
      <script type="text/javascript">

        function reURL(input) {

                var f_name=$("#fing").val();
                file = f_name.replace(/^.*[\\\/]/, '');
                document.getElementById("noFile").innerHTML = file;
                $(".file-upload").addClass('active');
            }

    function rURL(input) {

                var fa_name=$("#face").val();
                f_file = fa_name.replace(/^.*[\\\/]/, '');
                document.getElementById("noFile1").innerHTML = f_file;
                $(".file-upload1").addClass('active');

            }

      </script>

          </div>
           </div>

    </body>
</html>
