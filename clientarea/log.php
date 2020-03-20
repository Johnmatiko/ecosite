<?php

/**
 * Name: Simple PHP Login & Registration Script
 * Tutorial: https://tutorialsclass.com/code/simple-php-login-registration-script
 */

// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $username    = $_POST['username'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($con, "select 'username', 'password' from users
        where username='$username' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: page-1.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>