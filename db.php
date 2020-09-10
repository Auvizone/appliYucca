<?php 

ini_set('display_errors', 'On');
error_reporting(-1);

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'nico');
define('DB_PASSWORD', 'aaaa');
define('DB_NAME', 'yucca');

try {
    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connecté";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>