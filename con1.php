<?php
session_start();
$message="";
if(count($_POST)>0) {
$db=mysqli_connect('localhost','root','','carder');
    $uname = $_POST["name"];
    $pword = $_POST["pwd"];
    $pword = md5($pword);
$result = mysqli_query($db,"SELECT * FROM login WHERE u_name='" . $uname . "' and pwd = '". $pword."'");
$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);
if(is_array($row)) {
$_SESSION["id"] = $row[id];    
$_SESSION["name"] = $row[u_name];
    $count=1;
} 
    else {
$message = "Invalid Username or Password!";
}
}

if(isset($_SESSION["id"]) && $count==1) {
header("Location:trial-e.php");
}

else {
    echo "<script> 
    alert('Wrong Username And Password!!!!...');
   window.location.href='login.php';
    </script>";
}
?>