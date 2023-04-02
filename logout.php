<!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page destroys the session and consequently logs out the user.
-->
<?php
    session_start();

    $_SESSION = [];
    session_destroy();  // Clean up the session ID
    $login_message = 'You have been logged out.';
    include('login.php');
?>