<?php
/*
name:Natalia Smith
date: 3/1/2023
course name: IT202 section 004
assignment name: Unit 5 Assignment
email: nrs5@njit.edu.
This page connects to the SQL database
*/
//require_once('authenticate.php');
session_start();


    $dsn = 'mysql:host=localhost;dbname=jewelry_store';
    $username = 'root';
    $dbpassword = '';

    try
    {
        $db = new PDO($dsn, $username, $dbpassword);
                include('header.php'); //success page
                include('products.php'); //table page
    }
    catch (PDOException $exception)
    {
        include('headerError.php'); //error page
        $error_message = $exception->getMessage();
        echo "$error_message";
        
        exit();
    }

?>