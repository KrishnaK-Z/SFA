<?php
  $db=mysqli_connect('localhost','root','','carder');  
if(isset($_POST["btnSubmit1"]))
{
    $a=mysqli_real_escape_string($db,$_POST["eidpri"]);
    $b=mysqli_real_escape_string($db,$_POST["uni"]);
    $c=mysqli_real_escape_string($db,$_POST["hash"]);
    $sql="INSERT INTO `bio_primary`(`EID`, `pri_uni`, `pri_hash`) VALUES ('$a','$b','$c')";
    #$sql="INSERT INTO `biodata`(`EID`, `uni`, `hash`) VALUES ";
    if(mysqli_query($db,$sql))
           {
           echo "<script> alert('DONE.....');</script>";
           }else
    {
           echo "<script> alert('Not DONE.....');</script>";
    }
    
}
?>