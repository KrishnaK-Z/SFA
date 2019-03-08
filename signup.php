<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="css/signup.css" rel="stylesheet">
  <title>SIGN-UP</title>
</head>
<body>
<div class="limiter">
  <div class="full">
      <div class="f-half" style="background:url('img/images.jpeg');">
      </div>
      <div class="s-half">
        <form class="login-full" action="reg.php" method="post">
          <span class="login-full-title">VENDOR REGISTER </span>
					<div class="wrap-input " required>
						<span class="label-input">Username</span>
						<input class="input" type="text" name="username" placeholder="Username...">
						<span class="focus-input"></span>
					</div>
					<div class="wrap-input" required>
						<span class="label-input">Password</span>
						<input class="input" type="password" name="pass" placeholder="*************" hidden>
						<span class="focus-input"></span>
            </div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button class="login-form-btn" type="submit" name="reg">
								Sign Up
							</button>
						</div>


					</div>


        </form>
      </div>
    </div>
</div>
</body>
</html>
