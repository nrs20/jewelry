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
<?php  session_start();?>
<head>
  <title style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Squilliam's Jewels</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico.jpg">

</head>

<body style="background-color:#F5D6BA">
  <img class="logo" src="images/squill.jpg" alt="Squilliam's Jewels">
  <h1 class="correct" display:inline>Squilliam's Jewels</h1>
  <?php 
 
 if (empty($_SESSION['is_valid_admin'])) { //is null
  
?>
<p> <i><?php echo "Empty!!!!";?></p></i>


 <?php } else { ?>
<p> <i><?php echo "Welcome, ".  $_SESSION['fName'] . "  " . $_SESSION['Lname'];?></p></i>
  <p> <?php echo "( " . $_SESSION['email'] . " ) ";?></p>
  <p> <?php echo "( " . $_SESSION['passGiven'] . " ) ";?></p>
  <p> <?php echo "( " . $_SESSION['emailGiven'] . " ) ";?></p>

  

 <?php } 
    
 //session_start();
 //echo "<pre>";
 print_r($_SESSION);
 ?>

  
  
  <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Welcome to <b>Squilliam's Jewels!</b> </p>
  <main>
    <figure>
      <img class="pic1" src="images/rings.jpg" alt="Squilliam's Jewels">
      <img src="images/collection.jpg" alt="collection of jewelry">
      <img src="images/rings3.jpg" alt="collection of jewelry3">
      <img src="images/rings2.jpg" alt="collection of jewelry2">
      <figcaption class="started">Our best-sellers.</figcaption>
    </figure>
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
    <p class="started" style="border: aquamarine;"><u><b> How we started:</u> </b></p>
    <p class="allBegan">It all began in 1960, when Squilliam moved to America.</p>
    <p> He wanted to settle down with his family in the suburbs of San Francisco and open up a business.</p>
    <p> His father owned a bakery, but Squilliam always had a knack for jewelry. </p>
    <p> Thus, Squilliam's Jewels was born, and continues to be the leader in premium-quality jewelry today.</p>
    <p class="address"><u>Address:</u></p>
    <p id="street">266 North St </p>
    <p class="street2"> Whitney Point, New York, 13862 </p>

  </main>
  <footer>
    <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam. All rights reserved. </p>
  </footer>
</body>

</html>