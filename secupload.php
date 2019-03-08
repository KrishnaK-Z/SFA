<?php
  $db=mysqli_connect('localhost','root','','carder');  
if(isset($_POST["btnSubmit2"]))
{
    $a=mysqli_real_escape_string($db,$_POST["eidsec"]);
    $b=mysqli_real_escape_string($db,$_POST["uni1"]);
    $c=mysqli_real_escape_string($db,$_POST["hash1"]);
    $sql="INSERT INTO `bio_secondary`(`EID`, `sec_uni`, `sec_hash`) VALUES ('$a','$b','$c')";
    #$sql="INSERT INTO `biodata`(`EID`, `uni`, `hash`) VALUES ";
    if(mysqli_query($db,$sql))
           {
           echo "<script> alert('DONE.....');</script>";
           }
    
}
?>