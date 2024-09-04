<?php
session_start();                                        // server for buy.php

//initialize variables
$host="localhost";
$username="id19906857_apartment";
$password="mary01pio";

//connect to database
$db=mysqli_connect('localhost', 'id19906857_millanh', 'cEc/q]VFR$r9*4o%','id19906857_apart') or die('Connection failed on database');
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
