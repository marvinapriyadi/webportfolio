<?php
include_once 'inc-connectDB.php';
include_once 'inc-functions.php';
 
session_start();

if (isset($_POST['username'], $_POST['pass'])) {
    $username = $_POST['username'];
    $password = md5($_POST['pass']);
    
    if (login($username, $password, $mysqli) == true) {
        // Login success 
        header('Location: index.php');
    } else {
        // Login failed
        header('Location: page-login.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}