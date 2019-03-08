<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["u_name"]) {
?>
    Welcome <?php echo $_SESSION["u_name"]; ?>.Click here to <a href="a3.php" tite="Logout">Logout.</a>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>