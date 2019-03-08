<?php
include("config.php");
//$db=mysqli_connect('localhost','root','','carder');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname = $_POST["un"];
    $pword = $_POST["pw"];
    $pword = md5($pword);

    $sql = "SELECT * FROM login WHERE u_name = '$uname' and pwd = '$pword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["un"] = $row[u_name];
} else {
$message = "Invalid Username or Password!";
}
}


    if(isset($_SESSION["un"])) {
header("Location:trial-e.php");
}
    else 
    {
        echo "<script>
alert('Wrong Username or Password');
window.location.href='login.php';
</script>";
    }
}
?>