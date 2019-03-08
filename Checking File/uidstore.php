<?php
include("config.php");
    
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $B1=$_GET["EID1"];
    $sql=INSERT INTO `unid`(`uid`) VALUES ('$B1');
    mysqli_query($db,$sql);
}
?>