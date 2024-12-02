<?php
// Load the .env file using vlucas/phpdotenv
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

// Initialize Dotenv to load the environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
