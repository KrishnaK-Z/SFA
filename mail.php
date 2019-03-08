<?php
session_start();
$db=mysqli_connect('localhost','root','','carder');
$sql = "SELECT email FROM pdetails where EID='".$_SESSION["EID3"]."' ";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)) {
               
                $to=$row['email'];
               
              }
            }
else
{
    
$to="archieakadale@gmail.com";
    
}
             // the message
$msg = "Thanks for co-operating with us.";



// send email
if(mail($to,'REGISTERED',$msg))
{
    echo "MAIL sent";
}
?>