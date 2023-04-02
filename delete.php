<!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page is used to delete rows from the database through the click of the delete button.
-->
<?php
session_start();
//if (!isset($_SESSION['is_valid_admin'])) {
 //   header("Location: login.php" );
//}

    $dsn = 'mysql:host=localhost;dbname=jewelry_store';
    $username = 'root';
    $password = '';

    try
    {
        $db = new PDO($dsn, $username, $password);
                include('header.php'); //success page
              //  include('products.php'); //table page
    }
    catch (PDOException $exception)
    {
        include('headerError.php'); //error page
        $error_message = $exception->getMessage();
        echo "$error_message";
        
        exit();
    }

// Retrieve the record ID from the POST request
$recordId = $_POST['name'];
//echo $recordId;
// Perform the DELETE SQL query
$sql = "DELETE FROM jewelry WHERE jewelryCode = :jewlCode";
// execute the query using your database connection
$statement = $db->prepare($sql);
$statement->bindValue(':jewlCode', $recordId);

$statement->execute();
$statement->closeCursor();
include('products.php');
// Redirect the user to the table page after deleting the record
//header("Location: products.php");
exit();
?>