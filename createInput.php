<!--
name:Natalia Smith
date: 3/13/2023
course name: IT202 section 004
assignment name: Unit 7 Assignment
email: nrs5@njit.edu.
This page contains the forms needed for user input and sends them 
to add_jewelry for error checking.
-->
<?php
require_once('database.php');
$query = 'SELECT *
          FROM jewelrycategories';
$statement = $db->prepare($query);
$statement->execute();
$jewelery = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <main>
    <img class="shipIcon" src="images/diamond.jpg" alt="shipping logo">
    <form action="add_jewelry.php" method="post">
    <label>Category:</label><br>
    <select name="jewelry_Code" required>
    <option value="">--Please choose an option--</option>
    <?php foreach ($jewelery as $category) : ?>
     <option value="<?php
                    echo $category['jewelryCategoryID']; ?>">
    <?php echo $category['jewelryCategoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>
            <label >Code:</label> <br>
            <input type="text" name="code" required><br>
            <label>Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Description:</label><br>
            <input type="text" name="description" required><br>
            <label>Price:</label><br>
            <input type="number" min="0" step=0.01 name="price" required><br>
            <br>
            <input class="submit" type="submit" value="Add Product"><br>
            <br>
            <input class="reset" type="reset"><br>


    </form>
</body>
</main>
<footer>
  <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam. All rights reserved. </p>
</footer>

</html>