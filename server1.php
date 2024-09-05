<?php
session_start();   
/*
$servername = "localhost";
$username = "username";
$password = "password";
$database = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/

// server for Advertise with us
//initialize variables
$host="apartments-on-sell-02-maxwelotieno011-9723.k.aivencloud.com";
$username="avnadmin";
$password="AVNS_857YXcdFeSYsfe19jLH";
$dbname="db_apartment"

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
