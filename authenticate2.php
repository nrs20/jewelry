<?php
require_once('admin_db.php');
session_start();

//Slide 22 (mostly)
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (is_valid_admin_login($email, $password)) {
    $_SESSION['is_valid_admin'] = true;
    include('testingLogin.php');
    //include('home.php');   
    //echo "<p> You have successfully logged in.</p>";
} else {
    $_SESSION['is_valid_admin'] = false;
    if ($email == NULL & $password == NULL) {
        $login_message = "You must login to view this page.";
    } else {
        $login_message = "Invalid credentials. Please try again.";
    }
    include('loginFail.php');
}
?>