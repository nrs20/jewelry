<!--
name:Natalia Smith
date: 1/31/2023
course name: IT202 section 004
assignment name: Unit 3 Exercise
email: nrs5@njit.edu.
One “Shipping” page to input the “To” address for the package 
and output the packing label
-->
<?php
//set default value of variables for initial page load
if (!isset($fname)) {
  $fname = '';
}
if (!isset($lname)) {
  $lname = '';
}
if (!isset($address)) {
  $address = '';
}
if (!isset($city)) {
  $city = '';
}
if (!isset($zipCode)) {
  $zipCode = '';
}
if (!isset($state)) {
  $state = '';
}
if (!isset($value)) {
  $value = '';
}
if (!isset($dimensions)) {
  $dimensions = '';
}
if (!isset($orderNumber)) {
  $orderNumber = '';
}
if (!isset($shipDate)) {
  $shipDate = '';
}



?>


      <?php 
      include('homeTemplate.php');

    include("formInput.php"); //this page contains the forms for user input. 
    //session_start();
    if (empty($_SESSION['is_valid_admin'])) { //value is null
  
        header("Location: login.php" );
    }
    ?>

    <p class="address"><u>Address:</u></p>
    <p id="street">266 North St </p>
    <p class="street2"> Whitney Point, New York, 13862 </p>
  </main>
  <footer>
    <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam. All rights reserved. </p>
  </footer>
</body>

</html>