<!--
name:Natalia Smith
date: 1/31/2023
course name: IT202 section 004
assignment name: Unit 3 Exercise
email: nrs5@njit.edu.
One “Home” page describing your business. 
This page should include the name of your jewelry store,
 the address of your jewelry store 
 and a description.
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
  <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> </p>
  <?php 
 
 if (isset($_SESSION['is_valid_admin']) && $_SESSION['is_valid_admin'] == true) { 
?>

<p> <i><?php echo "Welcome, ".  $_SESSION['fName'] . "  " . $_SESSION['Lname'];?></p></i>
  <p> <?php echo "( " . $_SESSION['email'] . " ) ";?></p>
 <?php } else { ?>

  

 <?php } 

    
 //session_start();
 //echo "<pre>";
 //print_r($_SESSION);
 ?>
  <main>
    
    <ul>
      <header>
        <li><a href="home.php">Home</a></li>
        <li><a href="connectDatabase.php">Jewelry</a></li>
        <li><a href="shipping.php">Place Order</a></li>
        <li><a href="create.php">Create</a></li>
        <?php 
 
 if (empty($_SESSION['is_valid_admin'])) { //is null
  ?>
 
      <li><a href="login.php">Login</a></li>
 
  <?php } else { ?>

      <li><a href="logout.php">Logout</a></li>

  <?php } 
     
  //session_start();
  //echo "<pre>";
  //print_r($_SESSION);
  ?>
        <header>
    </ul>
  
    <p class="address"><u>Address:</u></p>
    <p id="street">266 North St </p>
    <p class="street2"> Whitney Point, New York, 13862 </p>

  </main>
 
</body>

</html>