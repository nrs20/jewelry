<!--
name:Natalia Smith
date: 1/31/2023
course name: IT202 section 004
assignment name: Unit 3 Exercise
email: nrs5@njit.edu.
This page contains the forms needed for user input and sends them 
to formValidator for error checking.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <main>
    <img class="shipIcon" src="images/ship.jpg" alt="shipping logo">
    <form action="formValidator.php" method="get">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" required><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" required><br>
      <label for="address"> Address:</label><br>
      <input type="text" id="address" name="address" required><br>
      <label for="city">City:</label><br>
      <input type="city" id="city" name="city" required><br>
      <label for="state">State:</label><br>
      <input type="text" id="state" name="state" required><br>
      <label for="zipCode">Zip Code:</label><br>
      <input type="text" id="zipCode" name="zipCode" required><br>
      <label for="shipDate">Ship Date:<br>
        <input type="date" id="shipDate" name="shipDate" required><br>
        <label for="orderNumber">Order Number:</label><br>
        <input type="number" id="orderNumber" name="orderNumber" required><br>
        <label for="dimensions">Dimensions (in inches):</label><br>
        <input type="number" id="dimensions" name="dimensions" required><br>
        <label for="value">Value:</label><br>
        <input type="number" id="value" name="value" required><br>
        <br>
        <label for="pet-select">Shipping:</label>
        <br>
        <select name="shippingChoice" id="shippingChoice" required>
          <option value="">--Please choose a shipping option--</option>
          <option value="nextDay">Next Day Air</option>
          <option value="priority">Priority Mail</option>
        </select>
        <br>
        <br>
        <input class="submit" type="submit" value="Submit">
    </form>
</body>
</main>
<footer>
  <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam. All rights reserved. </p>
</footer>

</html>