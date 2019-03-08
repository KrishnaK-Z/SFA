<?php
include("config.php");
//$db=mysqli_connect('localhost','root','','carder');
if(isset($_POST["reg"]))
   {
       if(empty($_POST["username"]) && empty($_POST["pass"]))
       {
           echo '<script> alert("Both Fields Need For Account Registration..... Enter Both Deatils....")</script>';
       }
       else
       {
           $username = mysqli_real_escape_string($db,$_POST["username"]);
           $pass = mysqli_real_escape_string($db,$_POST["pass"]);
           $pass=md5($pass);
           $sql="INSERT INTO login(`u_name`, `pwd`) VALUES ('$username','$pass')";
           if(mysqli_query($db,$sql))
           {
           echo "<script> alert('DONE.....');
           window.location.href='signup.php';</script>"; 
           }
       
       }
   }
?>