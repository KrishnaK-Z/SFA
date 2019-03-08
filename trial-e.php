<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="brand/logo.ico">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/lserv.css" type="text/css">
<link href="css/tabs.css" type="text/css" rel="stylesheet">
<link href="css1/bootstrap.min.css" rel="stylesheet">
<link href="pythonscripts/css/bioupload.css" type="text/css" rel="stylesheet">
<script src="js/tab.js" type="text/javascript"></script>
<script src="js/tabpanel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/qrcode.js"></script>
<script type="text/javascript" src="js/html5-qrcode.js"></script>   
<title>
Enroll
</title>
    <style>
    .hidden-div {
        display:none
        }
    
        .pull-r{
            float:right;
        }
    </style>
    <script>
    $(function(){
            $("#show_button").on('click',function() {
                $(this).hide();
            }); 
        });</script>
</head>
<body>
    <?php
if($_SESSION["name"]) {
?>
  <header class="header">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="sfaintro.php">
          <img id="ltrend" src="logo/logo1.jpeg"/>
        </a>

        </div>
        <span class="navbar-text" style="color: black;font-family:Aldrich;font-size:18px;  ">SFA
        </span>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li role="presentation" class="active" style="font-family: Bayon ;font-size: 18px;">
              <a href="logout.php">LOG-OUT <i class="fa fa-sign-out"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.navbar-collapse container-fluid -->
  </nav>
  </header>
  <div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Enrollment">
                            <span class="round-tab" >
                                <i class="fas fa-user" style='font-size:32px'></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Biometrics">
                            <span class="round-tab">
                                <i class="fas fa-fingerprint" style='font-size:32px'></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Verfication">
                            <span class="round-tab">
                                <i class="fas fa-upload" style='font-size:32px'></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="UID">
                            <span class="round-tab">
                                <i class="fas fa-check" style='font-size:32px'></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>PERSONAL DETAILS</h3>
                        <div style="overflow-y:scroll;overflow-x:hidden;width:1200;height:500">
                        <form role="form" class="form-horizontal" name="bio">
                        <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                        <div class="form-group">
                           <label class="col-md-4 control-label" >Enrollment ID</label>
                           <div class="col-md-8 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="EID" name="EID" placeholder="Enrollment ID" class="form-control" value="" type="text" required></div>
                           </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date Of Birth</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span><input type="date" id="dob" name="dob" class="form-control"  value="" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="fa fa-genderless" style="font-size:20px;"></i></span>
                                  <select class="selectpicker form-control" id="gen" class="gen" name="gen" required> 
                                    <option>---select---</option>
                                     <option>Male</option>
                                     <option>Female</option>
                                     <option>Others</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Father's Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="faName" name="faName" placeholder="Father's Name" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Mother's Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="moName" name="moName" placeholder="Mother's Name" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Grandfather's Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="grandName" name="grandName" placeholder="Grandfather's Name" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine" name="addressLine" placeholder="Address Line " class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="material-icons" style="font-size:16px;">location_city</i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="material-icons" style="font-size:16px;">location_city</i></span><input id="country" name="country" placeholder="Country" class="form-control"  value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" value="" type="text" required></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>            
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step" onclick="a()">Proceed <i class="glyphicon glyphicon-circle-arrow-right"></i></button></li>
                        </ul>
                            </form>
                            </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>BIOMETRICS</h3>
                        <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" name="ag" id="ag" method="post" enctype="multipart/form-data" action="imgup.php">
                    
                     <button type="button" data-toggle="modal" class="btn btn-success list-inline pull-right" data-target="#feed" style='position:relative'><i class="material-icons" style="font-size:14px;margin-top:4px;">live_tv</i> Live Feed</button>
                       <br>
                     <fieldset>
                       <div class="form-group">
                           <label class="col-md-2 control-label" ><b>Enrollment ID</b></label>
                          <div class="col-md-4 inputGroupContainer">
                             <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input 
                        type="text" id="id1" name="id1" class="form-control" required="true" value="" readonly></div>
                          </div>
                           </div>
                       <div class="form-group">
                          <label class="col-md-8 control-label">
                            <legend>FACE</legend>
                              Upload Applicant Face Data</label></div>
                         <div class="form-group">
                             <div class="col-md-8 inputGroupContainer">
                            <br><ul class="list-inline pull-left">
                                <li><input type="file" id="exampleInputFile" onchange="readURL(this);" name="files[]" multiple="multiple"></li>
                                 <li><button type="submit" name="btnSubmit" >Upload</button></li></ul></div>
                          <div class="col-md-4 inputGroupContainer">
                             <img id="blah" src="css/brand/sfa.png" height="200" width="300"/>
                             </div></div></fieldset></form>
                       <fieldset>
                           <div class="form-group">
                               <label class="col-md-8 control-label">
                                <legend class="list-inline pull-left">FINGERPRINT</legend><br>
                                    Upload Applicant Fingerprint Data</label></div>

                                    <div>
                                    <br><ul class="list-inline pull-left">
                                        <li>
                                            <input type='file' style='position:relative;'/></li>
                                        <li><button type="submit" name="btnSubmit" >Upload</button></li>
                                        </ul></div>
                           </fieldset>
                       <fieldset>
                           <div class="form-group">
                               <label class="col-md-8 control-label">
                                <legend class="list-inline pull-left">BIOMETRIC KEYS</legend>
                                    </label>
                           
                           <div class="col-md-4">
                               <button type="button"  class="btn btn-success list-inline pull-right" onclick="window.open('pythonscripts/bioupl.php')" style='position:relative'><i class="material-icons" style="font-size:16px;margin-top:4px;">create</i> Generate</button>
                               </div>
                           </div>
                           
                           <div class="row">
                           
                           </div>
                           <div class="row">
                           <label class="col-md-4 control-label">PRIMARY</label>
                             <div class="col-md-2 "></div>  
                            <label class="col-md-4 control-label">SECONDARY</label>
                           </div>
                           
                           
                            
                            <div class="col-md-4 inputGroupContainer">
                                <form id="priupload" name="priupload" action="pri.php" method="post">
                                <ul class="list-unstyled">
                                    <li>
                                    <input type="hidden" id="eidpri" name="eidpri" value=""></li>
                                        <li class="">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-id-badge"></i></span><input id="uni" name="uni" placeholder="u_primary" class="form-control" value="" type="text" ></div>
                                    </li>
                                        <li>
                                            <br>
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-slack"></i></span><input id="hash" name="hash" placeholder="h_primary" class="form-control" value="" type="text" ></div>         
                                    </li>
                                    <li>
                                            <br>
                                            <div class="float-md-right" ><button type="submit" name="btnSubmit1" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-open"></i> UPLOAD</button></div>
                                    </li>
                                        </ul>
                                </form>
                            </div>
                            
                            <div class="col-md-2 inputGroupContainer">
                                
                               </div>
                                                            
                            <div class="col-md-4 inputGroupContainer">
                                <form id="secupload" name="secupload" action="secupload.php" method="post">
                                <ul class="list-unstyled">
                                    <li>
                                    <input type="hidden" id="eidsec" name="eidsec" value=""></li>
                                        <li class="">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-id-badge"></i></span><input id="uni1" name="uni1" placeholder="u_secondary" class="form-control" value="" type="text" ></div>
                                    </li>
                                        <li>
                                            <br>
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-slack"></i></span><input id="hash1" name="hash1" placeholder="h_secondary" class="form-control" value="" type="text" ></div>         
                                    </li>
                                    <li>
                                            <br>
                                            <div class="float-md-right" ><button type="submit" name="btnSubmit2" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-open"></i> UPLOAD</button></div>
                                    </li>
                                        </ul>
                                
                                </form>
                            </div>
                               
                        
                           
                          
                                               
                     </fieldset>
                     <!-- Modal -->
                          <div class="modal fade" id="feed" role="dialog">
                            <div class="modal-dialog modal-lg" >
                        <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <div class="het" style="">
                                        <span class="line"></span>
                                        <span class="dot"></span>
                                        <span class="title">LIVE FEED</span>
                                        <span class="dot"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                                    <div class="modal-body">
                                      <video id="video" autoplay height=300></video>
                                      <canvas id="c1" width=400 height=400></canvas><br>
                                      <button onclick="snap();">Capture</button>
                                      <button onclick="save();" class="list-inline pull-right">Save</button>
                                      <script type="text/javascript">
                                      const constraints = {
                                        video: true
                                      };

                                      const video = document.querySelector('video');

                                      navigator.mediaDevices.getUserMedia(constraints).
                                        then((stream) => {video.srcObject = stream});
                                        var context=c1.getContext('2d');

                                        function snap()
                                        {
                                          context.drawImage(video,100,100,300,300);
                                        }
                                        function save()
                                        {
                                          //window.open(c1.toDataURL('image/png'));
                                       var gh = c1.toDataURL('png');

                                       var a  = document.createElement('a');
                                       a.href =gh;
                                       a.download = bio.EID.value;

                                       a.click()
                                     }
                                      </script>
                                    </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                </div>
                              </div>
                            </div>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step"><i class="glyphicon glyphicon-circle-arrow-left"></i> Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Proceed <i class="glyphicon glyphicon-circle-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    
                    
                    
                    
                   <div class="tab-pane" role="tabpanel" id="step3" name="step3">
                        <h3>VERIFICATION AND UPLOAD</h3>
                        <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                     <div style="overflow-y:scroll;overflow-x:hidden;width:1200;height:400">
                   <form class="well form-horizontal" name="biov" id="biov1" method="get" action="get_detail.php">
                      <fieldset>
                        <div class="form-group">
                           <label class="col-md-4 control-label" >Enrollment ID</label>
                           <div class="col-md-8 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input id="EID1" name="EID1" placeholder="Enrollment ID" class="form-control" value="" type="text" readonly required></div>
                           </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName1" name="fullName1" placeholder="Full Name" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date Of Birth</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span><input type="text" id="dob1" name="dob1" class="form-control" placeholder="DOB" value="" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="fa fa-genderless" style="font-size:20px;"></i></span>
                                  <input id="gen1" name="gen1" placeholder="Gender" class="form-control" value="" type="text" readonly required>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Father's Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="faName1" name="faName1" placeholder="Father's Name" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Mother's Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="moName1" name="moName1" placeholder="Mother's Name" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Grandfather's Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="grandName1" name="grandName1" placeholder="Grandfather's Name" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line " class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city1" name="city1" placeholder="City" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="material-icons" style="font-size:16px;">location_city</i></span><input id="state1" name="state1" placeholder="State/Province/Region" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode1" name="postcode1" placeholder="Postal Code" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="material-icons" style="font-size:16px;">location_city</i></span><input id="country1" name="country1" placeholder="Country" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email1" name="email1" placeholder="Email" class="form-control" value="" type="text" readonly required></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span><input id="phoneNumber1" name="phoneNumber1" placeholder="Phone Number" class="form-control" value="" type="text" required readonly></div><br>
                                <span style="display:block;"><button type="submit" id="show_button" class="btn btn-success list-inline pull-right" name="sub">UPDATE</button></span>
                            </div>
                         </div>
                            
                      </fieldset>
                       
                   </form>
                         </div>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step"><i class="glyphicon glyphicon-circle-arrow-left"></i> Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Proceed <i class="glyphicon glyphicon-circle-arrow-right"></i></button></li>
                        </ul>
                    </div>
                    
                    
                    <div class="tab-pane" role="tabpanel" id="step4">
                        <h3>UNIQUE ID GENERATION</h3>
                        <div class="container">
                            
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" name="ag2" id="ag2" method="post" enctype="multipart/form-data" action="uidstore.php">
                       <?php
                       $db=mysqli_connect('localhost','root','','carder');
                       $sql = "SELECT * FROM bio_primary where EID='".$_SESSION["EID3"]."' ";
                        $result = mysqli_query($db, $sql);
                         if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $M1 = $_SESSION["EID3"];
                        ?>
                     <fieldset>

                       <div class="form-group">
                          <label class="col-md-4 control-label" ><b>Enrollment ID</b></label>
                          <div class="col-md-8 inputGroupContainer">
                             <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input
                        type="text" id="finaleid" name="finaleid" class="form-control" required="true" value="<?php echo $M1 ?>" readonly></div>
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-md-4 control-label" ><b>UNIQUE VALUE</b></label>
                          <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input
                          type="text" id="finaluni" name="finalunique" class="form-control" required="true" value= "<?php echo $row['pri_uni']; ?>" readonly></div>
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-md-4 control-label" ><b>HASH VALUE</b></label>
                          <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input
                       type="text" id="finalhash" name="finalhash" class="form-control" required="true" value= "<?php echo $row['pri_hash']; $aj=$row['pri_hash'];?>"   readonly>
                          </div>
                       </div>
                         </div>
                       <br><br>
                         <div class="form-group">
                            <div class="col-md-2 inputGroupContainer" >

                            </div>
                            <div class="col-md-6 inputGroupContainer" style="float:right;" >
                             <div id="qrcode"></div>

      <script type="text/javascript">
      function updateQRCode(text) {

        var element = document.getElementById("qrcode");

        var bodyElement = document.body;
        if(element.lastChild)
          element.replaceChild(showQRCode(text), element.lastChild);
        else
          element.appendChild(showQRCode(text));

      }

      updateQRCode('<?php echo $aj ?>');
    </script>

                             </div>
                             <div class="col-md-4 inputGroupContainer" >

                             </div>
                         </div>
                     </fieldset>

                       <?php
                    }}
                        ?>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
                            <ul class="list-inline pull-right">
                            <li><a type="button" href="ncard.php" class="btn btn-primary btn-info-full next-step">Finish <i class="glyphicon glyphicon-circle-arrow-right"></i></a></li>
                        </ul>
    </div>
                        
                    <div class="clearfix"></div>
                </div>
            </div>
            </div>
    </section>
   </div>
</div>
    <script type="text/javascript">
                        function a()
                        {
                           biov.EID1.value=bio.EID.value;
                           biov.fullName1.value=bio.fullName.value;
                           biov.dob1.value=bio.dob.value;
                           biov.gen1.value=bio.gen.value;
                           biov.faName1.value=bio.faName.value;
                           biov.moName1.value=bio.moName.value;
                           biov.grandName1.value=bio.grandName.value;
                           biov.addressLine1.value=bio.addressLine.value;
                           biov.city1.value=bio.city.value;
                           biov.state1.value=bio.state.value;
                           biov.postcode1.value=bio.postcode.value;
                           biov.country1.value=bio.country.value;
                           biov.email1.value=bio.email.value;
                           biov.phoneNumber1.value=bio.phoneNumber.value;
                           ag.id1.value=bio.EID.value;
                           priupload.eidpri.value=bio.EID.value;
                           secupload.eidsec.value=bio.EID.value;
                           ag2.finaleid.value=bio.EID.value;
                                  
                        }
        
   
    </script>
    <script src="js/jQuery.Form.js"></script>
    <script type="text/javascript">	
				
				$("#biov1").ajaxForm({
					complete:function(data){
						status.html(data.responseText);
                        
					}
				});
       $("#ag").ajaxForm({
					complete:function(data){
						status.html(data.responseText);
					}
				});
         $("#ag2").ajaxForm({
					complete:function(data){
						status.html(data.responseText);
					}
				});
        $("#priupload").ajaxForm({
					complete:function(data){
						status.html(data.responseText);
					}
				});
        $("#secupload").ajaxForm({
					complete:function(data){
						status.html(data.responseText);
					}
				});
</script>
    <script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#ag").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>
    <?php
    }
    else {echo "<script> alert('Invalid...');
    window.location.href='login.php';
    </script>";}
    ?>
    
</body>
</html>