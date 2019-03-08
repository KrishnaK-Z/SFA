<?php
  $db=mysqli_connect('localhost','root','','carder');  
if(isset($_POST["reg"]))
{
    $a=mysqli_real_escape_string($db,$_POST["{{key_x}}"]);
    $b=mysqli_real_escape_string($db,$_POST["{{key_y}}"]);
    $c=mysqli_real_escape_string($db,$_POST["{{Fp}}"]);
    $d=mysqli_real_escape_string($db,$_POST["{{Fs}}"]);
    $sql="INSERT INTO `biodata`(`EID`, `finger`, `face`, `hash`) VALUES ('$a','$b','$c','$d')";
    if(mysqli_query($db,$sql))
           {
           echo "<script> alert('DONE.....');
           window.location.href='signup.php';</script>"; 
           }
    
}
?>