<?php
include_once 'inc-configDB.php';   // As functions.php is not included

$mysqli = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>