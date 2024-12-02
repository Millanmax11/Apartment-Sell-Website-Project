<?php
session_start();   
require_once 'config.php';

// server for Advertise with us
// Retrieve environment variables
$host = getenv('DB_HOST');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

//connect to database
$db=mysqli_connect($host, $username, $password, $dbname) or die('Connection failed on database');
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
