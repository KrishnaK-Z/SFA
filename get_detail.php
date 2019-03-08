<?php
session_start();
include("config.php");
    
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $N1=$_GET["EID1"];
    $_SESSION["EID3"] = $N1;
    $N2=$_GET["fullName1"];
    $N3=$_GET["dob1"];
    $N4=$_GET["gen1"];
    $N5=$_GET["faName1"];
    $N6=$_GET["moName1"];
    $N7=$_GET["grandName1"];
    $N8=$_GET["addressLine1"];
    $N9=$_GET["city1"];
    $N10=$_GET["state1"];
    $N11=$_GET["postcode1"];
    $N12=$_GET["country1"];
    $N13=$_GET["email1"];
    $N14=$_GET["phoneNumber1"];
}
$sql="INSERT INTO `pdetails`(`EID`, `fullName`, `dob`, `gender`, `faName`, `moName`, `grandName`, `addressLine`, `city`, `state`, `postcode`, `country`, `email`, `phoneNumber`) VALUES ('$N1','$N2','$N3','$N4','$N5','$N6','$N7','$N8','$N9','$N10','$N11','$N12','$N13','$N14')";

        if(mysqli_query($db,$sql))
        {
            $N1=$N2=$N3=$N4=$N5=$N6=$N7=$N8=$N9=$N10=$N11=$N12=$N13=$N14="";
            //echo "<script>alert('M'); </script>";
        }else 
        {
            echo "<script> alert('Insert aagala'); </script>";
}

?>
