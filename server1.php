<?php
session_start();                                                // server for Advertise with us

//initialize variables
$host="localhost";
$username="id19906857_apartment";
$password="mary01pio";

//connect to database
$db=mysqli_connect('localhost', 'id19906857_millanh', 'cEc/q]VFR$r9*4o%','id19906857_apart') or die('Connection failed on database');
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
