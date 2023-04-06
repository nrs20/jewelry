<!--
name:Natalia Smith
date: 3/13/2023
course name: IT202 section 004
assignment name: Unit 7 Assignment
email: nrs5@njit.edu.
This page is just a template/db connection page.
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <title style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Squilliam's Jewels</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico.jpg">

</head>

<body style="background-color:#F5D6BA">
  <img class="logo" src="images/squill.jpg" alt="Squilliam's Jewels">
  <h1 class="correct" display:inline>Squilliam's Jewels</h1>
  <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Add Product: </p>
  <br>
  <main>
    <figure>
    
    </figure>
    <ul>
      <header>
      <li><a href="home.php">Home</a></li>
        <li><a href="connectDatabase.php">Jewelry</a></li>
        <li><a href="shipping.php">Place Order</a></li>
        <li><a href="create.php">Create</a></li>
        <?php 
  session_start();
  if (empty($_SESSION['is_valid_admin'])) { //is null
    header("Location: login.php" );

    ?>
   
        <li><a href="login.php">Login</a></li> 
   
    <?php } else { ?>
  
        <li><a href="logout.php">Logout</a></li>
  
    <?php } 
      ?>
        <header>
    </ul>

        <header>
    </ul>
    
    <?php 
 
 if (isset($_SESSION['email'])) { 
?>

<p> <i><?php echo "Welcome, ".  $_SESSION['fName'] . "  " . $_SESSION['Lname'];?></p></i>
  <p> <?php echo "( " . $_SESSION['email'] . " ) ";?></p>
 <?php } else { ?>

  

 <?php } ?>

    <p class="address"><u>Address:</u></p>
    <p id="street">266 North St </p>
    <p class="street2"> Whitney Point, New York, 13862 </p>

  </main>
 
</body>

</html>
<?php
//session_start();
if (!isset($_SESSION['is_valid_admin'])) {
  header("Location: login.php" );
}
 $dsn = 'mysql:host=localhost;dbname=jewelry_store';
 $username = 'root';
 $password = '';

 try
 {
     $db = new PDO($dsn, $username, $password);
            // include('header.php'); //success page
            // include('products.php'); //table page
 }
 catch (PDOException $exception)
 {
     include('headerError.php'); //error page
     $error_message = $exception->getMessage();
     echo "$error_message";
     
     exit();
 }
    include('createInput.php'); //success page




?>