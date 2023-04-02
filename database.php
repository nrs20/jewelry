<?php
/*
name:Natalia Smith
date: 3/1/2023
course name: IT202 section 004
assignment name: Unit 5 Assignment
email: nrs5@njit.edu.
This page connects to the SQL database
*/
    $dsn = 'mysql:host=localhost;dbname=jewelry_store';
    $username = 'root';
    $password = '';

    try
    {
        $db = new PDO($dsn, $username, $password);
               
    }
    catch (PDOException $exception)
    {
        include('headerError.php'); //error page
        $error_message = $exception->getMessage();
        echo "$error_message";
        
        exit();
    }
?>