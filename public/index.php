<?php

// Temporarily enable error display for debugging - if needed
// Was not included in original example code
ini_set('display_errors', 1); error_reporting(E_ALL);

// Include the configuration file
require_once "../app/config/config.php";

// Include the Database class file
require_once "../app/core/Database.php";

// Include the Controller class file
require_once "../app/core/Controller.php";

// Include the App class file
require_once "../app/core/App.php";

// Create a new instance of the App class
$app = new App();

