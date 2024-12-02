<?php
session_start(); 
require_once 'config.php';

// Load environment variables
require_once 'vendor/autoload.php'; // Ensure Composer's autoload file is included
Dotenv\Dotenv::createImmutable(__DIR__)->load(); // Load the .env file if you're using phpdotenv

// server for buy.php

// Retrieve environment variables
$host = getenv('DB_HOST');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

//connect to database
$db=mysqli_connect($host, $username, $password, $dbname);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['reg1'])){

    // Prepare the query with placeholders
    $query = "INSERT INTO myTB (name, email, phone, county) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $db->prepare($query);
    if ($stmt === false) {
        die("Failed to prepare the statement: " . $db->error);
    }

    // Bind parameters to the query
    $stmt->bind_param("ssss", $fname, $femail, $fphone, $fcounty); // "ssss" indicates 4 string parameters

    // Execute the query
    if ($stmt->execute()) {
        // Store the success message in the session
        $_SESSION['name'] = $fname;
        $_SESSION['success'] = "Your Submission is Successful!";
        header('Location: success.php'); // Redirect to success page
        exit(); // Ensure no further code is executed after the redirect
    } else {
        // Handle errors
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$db->close();
?>
