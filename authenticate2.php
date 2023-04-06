<?php
require_once('admin_db.php');
//session_start();

//Slide 22 (mostly)
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (is_valid_admin_login($email, $password)) {
   // $_SESSION['is_valid_admin'] = true;
    // redirect logged in user to default page
    header("Location: .");
} else {
    $login_message = "Invalid credentials.";
    include('login.php');
}

//echo $password;
/*
$is_valid_admin = is_valid_admin_login($email, $password);

if ($is_valid_admin) {
    $_SESSION['is_valid_admin'] = true;
    include('home.php');  
 
    //echo "<p> You have successfully logged in.</p>";
} else {
    $_SESSION['is_valid_admin'] = false;
    if ($email == NULL || $password == NULL) {
        $login_message = "You must enter both an email and a password to login.";
    } else {
        $login_message = "Invalid email or password. Please try again.";
    }
    include('loginFail.php');
}

?>*/
?>