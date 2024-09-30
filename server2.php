<?php
session_start(); 

// server for buy.php

//initialize variables
$host="tj5iv8piornf713y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="gdwzayqi83kpydm6";
$password="a8xezuretpx2qkgj";

//connect to database
$db=mysqli_connect($host, $username, $password, "h0ytf546ofy3zrq5") or die('Connection failed on database');
if(isset($_POST['reg1'])){

    //receive all inputs from the form
    $fname=mysqli_real_escape_string($db,$_POST['name']);
    $femail=mysqli_real_escape_string($db,$_POST['email']);
    $fphone=mysqli_real_escape_string($db,$_POST['phone']);
    $fapartment=mysqli_real_escape_string($db,$_POST['apartment']);
     $flocation=mysqli_real_escape_string($db,$_POST['location']);
    $query="INSERT INTO myTB1(name, email, phone, apartment, location) VALUES('$fname', '$femail', '$fphone', '$fapartment', '$flocation')";
        mysqli_query($db,$query);
        $_SESSION['name']=$fname;
        $_SESSION['success']="Your Submition is Successful";
        header('location: success.php');
}
?>
