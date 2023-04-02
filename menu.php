<!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page shows 'Login' on the menu if the user is not logged in, 
and 'logout' if the user is not logged in.

-->
<html>
<body>
<?php 
  session_start();
  if (isset($_SESSION['is_valid_admin'])) { 
?>
    <p>
      <a href="logout.php">Logout</a>
    </p>
  <?php } else { ?>
    <p>
      <a href="login.php">Login</a>
    </p>
  <?php } ?>
</body>
</html>