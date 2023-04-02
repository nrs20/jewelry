<!--
name:Natalia Smith
date: 3/13/2023
course name: IT202 section 004
assignment name: Unit 7 Assignment
email: nrs5@njit.edu.
This page contains the validation for the form created in createInput.php
-->

<!DOCTYPE html>
<html lang="en">

<head>

  <title style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Squilliam's Jewels</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico.jpg">
  <title style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Squilliam's Jewels</title>
</head>

<body style="background-color:#F5D6BA">
  <main>
    <img class="logo" src="images/squill.jpg" alt="Squilliam's Jewels">
    <h1 class="correct">Squilliam's Jewels</h1>
    <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"></b> </p>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="connectDatabase.php">Jewelry</a></li>
      <li><a href="shipping.php">Place Order</a></li>
      <li><a href="create.php">Create</a></li>
      <?php 
  session_start();
  if (isset($_SESSION['is_valid_admin'])) { 
?>
 
      <li><a href="logout.php">Logout</a></li>
 
  <?php } else { ?>

      <li><a href="login.php">Login</a></li>

  <?php } ?>
        <header>
    </ul>

        <header>
    </ul>
        <header>
    </ul>
    
    </ul>

    <p class="address"><u>Address:</u></p>
    <p class="address"><u>Address:</u></p>
    <p id="street">266 North St </p>
    <p class="street2"> Whitney Point, New York, 13862 </p>
  </main>
</body>

</html>
<?php

// Get the product data
$jewelryCategory_id = filter_input(INPUT_POST, 'jewelry_Code', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$description = filter_input(INPUT_POST, 'description');
$error = '';
$errorFlag = false;

function checkDuplicate($value)
{
  $dsn = 'mysql:host=localhost;dbname=jewelry_store';
  $username = 'root';
  $password = '';

  try {
    $db = new PDO($dsn, $username, $password);
    //include('header.php'); //success page
    // include('products.php'); //table page
  } catch (PDOException $exception) {
    include('headerError.php'); //error page
    $error_message = $exception->getMessage();
    echo "$error_message";

    exit();
  }
  $duplicate = 'SELECT * FROM jewelry
  WHERE jewelryCode = :code';
  $duplicate_statement = $db->prepare($duplicate);
  $duplicate_statement->bindValue(':code', $value);
  $duplicate_statement->execute();
  $duplicate_Check = $duplicate_statement->fetchAll();
  //echo $duplicate_Check;
  $duplicate_statement->closeCursor();
  if (count($duplicate_Check) != 0) {
    return true;
  } else {
    return false;
  }
}





// Validate inputs
if (
  $jewelryCategory_id == null || $jewelryCategory_id == false || $code == null
  || $name == null || $price == null
  || $price == false || $description == null
) {
  $error .= "Invalid product data. Check all fields and try again.";
  // include('error.php'); 
  //echo $error;
  $errorFlag = true;
}

//error checking
if ($price < 0) {
  $error .= " Price needs to be a positive value!";
} else if ($price > 1000000) {
  $errorFlag = true;
  $error .= " Price needs to be less than $1,000,000!";
}
if ($errorFlag) {
  include('createInput.php');
  echo '<p class="error_message"> <b> Error:</b> ' . $error . '</p>';;
} else {
  include('database.php');


  //if it is found to be a duplicate, do not insert.
  if (checkDuplicate($code) == true) {
    include('createInput.php');
    echo '<p class="error_message"> <b> Error:</b> ' . "Duplicate jewelryCode '$code'." . '</p>';;
    //echo $duplicate_Check;
  } else {
    $query = 'INSERT INTO jewelry
                 (jewelryCategoryID, jewelryCode, jewelryName, price, description, dateAdded)
              VALUES
                 (:jewelryCategory_id, :code, :name, :price, :description, NOW())';
    $statement = $db->prepare($query);
    $statement->bindValue(':jewelryCategory_id', $jewelryCategory_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':description', $description);

    $statement->execute();
    $statement->closeCursor();
    include('products.php');
  }
}
?>