<html>
<head>
<title>PORTAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="brand/logo.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/serv.css">
</head>
<body>
<header class="header">
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="sfaintro.php">
        <img src="logo/logo1.jpeg" width="100" height="30" style="position:relative;align:left; bottom:5px;">
      </a>

      </div>
      <span class="navbar-text" style="color: black;font-family:Aldrich;font-size:18px;position:relative; bottom:5px; top:5px; ">SFA
      </span>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation" class="active" style="font-family: Bayon ;font-size: 18px;">
            <a href="sfaintro.php"><i class="fa fa-home"></i> SERVICE PORTAL</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.navbar-collapse container-fluid -->
</nav>
</header>
<div class="main" style="background:url('css/brand/security.jpg');">
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form method="post" action="con1.php">
          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text" name="name" Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password" name="pwd"  Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->

             <div>
                                <span style="width:50%; text-align:center;  display: inline-block;"><button type="submit" style="font-family: Bayon ;">LOGIN <i class="fa fa-sign-in"></i></button></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo" style="font-family:Aldrich;">SFA

          <div class="clearfix"></div>
      </div>

      </div>
</center>
    </div>

</div>
</body>
</html>
