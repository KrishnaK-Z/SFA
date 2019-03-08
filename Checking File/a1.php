<?php
session_start();
if(count($_POST)>0) {
    $db=mysqli_connect('localhost','root','','carder');
$result = mysqli_query($db,"SELECT * FROM login WHERE u_name='" . $_POST["u_name"] . "' and pwd = '". $_POST["pwd"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row[id];
    $_SESSION["u_name"] = $row[u_name];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:a2.php");
}
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="u_name">
 <br>
 Password:<br>
<input type="password" name="pwd">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>