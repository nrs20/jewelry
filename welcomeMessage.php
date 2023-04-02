<?php
if (isset($_SESSION['email'])) { 
?>

<p> <?php echo "Welcome, ".  $_SESSION['fName'] . "  " . $_SESSION['Lname'];?></p>
  <p> <?php echo "( " . $_SESSION['email'] . " ) ";?></p>
 <?php } else { ?>

  

 <?php } 
    