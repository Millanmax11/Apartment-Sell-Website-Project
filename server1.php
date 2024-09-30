<?php
session_start();   

// server for Advertise with us
//initialize variables
$host="tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="gdwzayqi83kpydm6";
$password="a8xezuretpx2qkgj";

//connect to database
$db=mysqli_connect($host, $username, $password, "h0ytf546ofy3zrq5") or die('Connection failed on database');
if(isset($_POST['reg'])){

    //receive all inputs from the form
    $fname=mysqli_real_escape_string($db,$_POST['name']);
    $femail=mysqli_real_escape_string($db,$_POST['email']);
    $fphone=mysqli_real_escape_string($db,$_POST['phone']);
    $fcounty=mysqli_real_escape_string($db,$_POST['county']);
$query="INSERT INTO myTB(name, email, phone, county)
        VALUES('$fname', '$femail', '$fphone', '$fcounty')";
        mysqli_query($db,$query);
        $_SESSION['name']=$fname;
        $_SESSION['success']="Your Submition is Successful";
        header('location: success.php');
}


?>
