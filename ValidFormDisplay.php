<!--
name:Natalia Smith
date: 1/31/2023
course name: IT202 section 004
assignment name: Unit 3 Assignment
email: nrs5@njit.edu.
This page is accessed if and only if there were
 no errors in the formValidator.php file.
-->
<?php session_start(); ?>
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
<ul>
<li><a href="home.php">Home</a></li>
        <li><a href="connectDatabase.php">Jewelry</a></li>
        <li><a href="shipping.php">Place Order</a></li>
        <li><a href="create.php">Create</a></li>
        <?php
        if (isset($_SESSION['is_valid_admin'])) { 
?>
    
      <li><a href="logout.php">Logout</a></li>
    
  <?php } else { ?>
 
      <li><a href="login.php">Login</a></li>

  <?php } ?>
        <header>
    </ul>
</ul>
<p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Your Shipping Label: <b></b> </p>
<?php
$fname = filter_input(INPUT_GET,'fname');
$lname = filter_input(INPUT_GET,'lname');
$address = filter_input(INPUT_GET,'address');
$city = filter_input(INPUT_GET,'city');
$zipCode = filter_input(INPUT_GET,'zipCode');
$state = filter_input(INPUT_GET,'state');
$value = filter_input(INPUT_GET,'value',FILTER_VALIDATE_INT);
$dimensions = filter_input(INPUT_GET,'dimensions',FILTER_VALIDATE_INT);
$orderNumber = filter_input(INPUT_GET,'orderNumber',FILTER_VALIDATE_INT);
$shipDate = filter_input(INPUT_GET,'shipDate');
$shippingChoice = $_GET['shippingChoice'];

?>


</div>
<div class="to">
<img class="barcode" src="images/barcode.jpg" alt="A photo of a barcode"></img>
    <p class="trackingNum"> <b>Tracking Number:</b> 8476352150938A</p>
<p class="recipient"><u><i>Recipient:</u></i></p>
    <p class="toAddress"> <b>Name: </b><?php echo($fname. ' '.$lname);?></p>
    <p class="toAddress"> <b>Address: </b><?php echo($city.', '. ' '. $state.', '.$zipCode);?></p>
    </div>
    <p class="packageInfo"> <b>Dimensions:</b> <?php echo($dimensions. ' '."inches");?></p>
    <p class="packageInfo"> <b>Declared Value:</b> <?php echo("$".$value);?></p>
    <p class="packageInfo"> <b>Shipping Company:</b> FedEx</p>
    <p class="packageInfo"> <b>Shipping Class:</b> <?php echo(ucfirst($shippingChoice));?></p>
    <p class="packageInfo"> <b>Order Number:</b> <?php echo($orderNumber); ?></p>
    <p class="packageInfo"> <b>Ship Date:</b> <?php echo($shipDate); ?></p>
    <hr></hr>

      <div class="from">
      <p class="fromAddress"><u><i>Sender:</u></i></p>
    <p class="fromAddress">Squilliam's Jewels</p>
    <p class="fromAddress">266 North St</p>
    <p class="fromAddress">Whitney Point, New York, 13862</p>
   
  <div class="package">
  
  </div>
  <hr>
  <p class="thanks"><i>Thanks for ordering from Squilliam's Jewels!</i></p>
    </main>
    <footer>
      <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam.  All rights reserved. </p>
    </footer>
  </body>
</html>