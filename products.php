<?php
/*
name:Natalia Smith
date: 3/1/2023
course name: IT202 section 004
assignment name: Unit 5 Assignment
email: nrs5@njit.edu.
This page will display the jewelry category name, 
jewelry code, jewelry name, description 
and price of all jewelry items stored in the database by 
making an SQL query from PHP code
*/


$query = 'SELECT jewelryCategoryID, jewelryCode, jewelryName, description, price
          FROM jewelry
          WHERE jewelryCategoryID=11231'; //grabbing all the necklaces
              
$statement = $db->prepare($query);
$statement->execute();
$products = $statement->fetchAll();

$necklaceNameQuery = 'SELECT jewelryCategoryName
          FROM jewelrycategories WHERE jewelryCategoryID=11231'; //grabbing the categoryName foe necklace
$necklaceNameStatement = $db->prepare($necklaceNameQuery);
$necklaceNameStatement->execute();
$necklaceName = $necklaceNameStatement->fetchAll();

$ringQuery = 'SELECT jewelryCategoryID, jewelryCode, jewelryName, description, price
          FROM jewelry
          WHERE jewelryCategoryID=12345'; //grabbing all the rings
$ringQueryStatement = $db->prepare($ringQuery);
$ringQueryStatement->execute();
$ringInfo = $ringQueryStatement->fetchAll();

$ringNameQuery = 'SELECT jewelryCategoryName
          FROM jewelrycategories WHERE jewelryCategoryID=12345'; //grabbing the categoryName for rings
$ringNameStatement = $db->prepare($ringNameQuery);
$ringNameStatement->execute();
$ringNameInfo = $ringNameStatement->fetchAll();

$earringNameQuery = 'SELECT jewelryCategoryName
          FROM jewelrycategories WHERE jewelryCategoryID=34251'; //grabbing the categoryName for earrings
$earringQuery = $db->prepare($earringNameQuery);
$earringQuery->execute();
$earringNameInfo = $earringQuery->fetchAll();

$earringInfoQuery = 'SELECT jewelryCategoryID, jewelryCode, jewelryName, description, price
          FROM jewelry
          WHERE jewelryCategoryID=34251'; //grabbing all the earrings
$earringInfoRes = $db->prepare($earringInfoQuery);
$earringInfoRes->execute();
$earringInfoFinal = $earringInfoRes->fetchAll();

$charmNameQuery = 'SELECT jewelryCategoryName
          FROM jewelrycategories WHERE jewelryCategoryID=74892'; //grabbing the categoryName for charms
$charmNameInfo = $db->prepare($charmNameQuery);
$charmNameInfo->execute();
$charmName = $charmNameInfo->fetchAll();

$charmInfoQuery = 'SELECT jewelryCategoryID, jewelryCode, jewelryName, description, price
          FROM jewelry
          WHERE jewelryCategoryID=74892'; //grabbing all the charms
$charmInfo = $db->prepare($charmInfoQuery);
$charmInfo->execute();
$charmInfoResult = $charmInfo->fetchAll();

$pendantNameQuery = 'SELECT jewelryCategoryName
          FROM jewelrycategories WHERE jewelryCategoryID=90182'; //grabbing the categoryName for pendants
$pendantName = $db->prepare($pendantNameQuery);
$pendantName->execute();
$pendantNameResult = $pendantName->fetchAll();

$pendantInfoQuery = 'SELECT jewelryCategoryID, jewelryCode, jewelryName, description, price
          FROM jewelry
          WHERE jewelryCategoryID=90182'; //grabbing all the pendants
$pendantInfo = $db->prepare($pendantInfoQuery);
$pendantInfo->execute();
$pendantInfoResult = $pendantInfo->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
    <?php foreach ($necklaceName as $product) { ?>
<!-- Placing Necklaces in table -->

        <h4><?php echo $product['jewelryCategoryName']; ?></h4>
<?php } ?>
    <table>
            <tr>
                <td>CategoryID</td>
                <td>Code</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
                        <td>Delete Item</td>

<?php endif; ?>

  </tr>	 
</tr>

    <?php foreach ($products as $product) { ?>
<tr>
    <td><?php echo $product['jewelryCategoryID']; ?></td>
    <td><?php echo $product['jewelryCode']; ?></td>
    <td><?php echo $product['jewelryName']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td><?php echo $product['price']; ?></td>
    <!--<td><a href="delete.php id=">Delete</a></td>-->
    <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
    <td>
    <form action='delete.php?name="<?php echo $product['jewelryCode']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $product['jewelryCode']; ?>">
        <input type="submit" name="submit" value="Delete">
    </td>
    </form><?php endif; ?>
   
<!--</td> -->
</tr>
   

<?php } ?>
 </table>
<!-- End of Placing Necklaces in table -->

<?php foreach ($ringNameInfo as $product) { ?>
<!-- Placing rings in table -->

<h4><?php echo $product['jewelryCategoryName']; ?></h4>
<?php } ?>
<table>
<tr>
                <td>CategoryID</td>
                <td>Code</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
                        <td>Delete Item</td>

<?php endif; ?>

</tr>
<?php foreach ($ringInfo as $product) { ?> 
    <tr>
   <td><?php echo $product['jewelryCategoryID']; ?></td>

    <td><?php echo $product['jewelryCode']; ?></td>
    <td><?php echo $product['jewelryName']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td><?php echo $product['price']; ?></td>
    <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
    <td>
    <form action='delete.php?name="<?php echo $product['jewelryCode']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $product['jewelryCode']; ?>">
        <input type="submit" name="submit" value="Delete">
    </td>
    </form><?php endif; ?>
</tr>

    <?php } ?>
    </table>
<!-- End of Placing rings in table -->


    <?php foreach ($earringNameInfo as $product) { ?>
<!-- Placing Earrings in table -->

<h4><?php echo $product['jewelryCategoryName']; ?></h4>
<?php } ?>
<table>
<tr>
                <td>CategoryID</td>
                <td>Code</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
                        <td>Delete Item</td>

<?php endif; ?>
 
</tr>
<?php foreach ($earringInfoFinal as $product) { ?>
 
    <tr>
   <td><?php echo $product['jewelryCategoryID']; ?></td>

    <td><?php echo $product['jewelryCode']; ?></td>
    <td><?php echo $product['jewelryName']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td><?php echo $product['price']; ?></td>
    <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
    <td>
    <form action='delete.php?name="<?php echo $product['jewelryCode']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $product['jewelryCode']; ?>">
        <input type="submit" name="submit" value="Delete">
    </td>
    </form><?php endif; ?>
</tr>

    <?php } ?>
    </table>

    <?php foreach ($charmName as $product) { ?>
<!-- End of Placing Earrings in table -->

<h4><?php echo $product['jewelryCategoryName']; ?></h4>
<?php } ?>
 <!-- Placing charms in table -->

<table>
<tr>
                <td>CategoryID</td>
                <td>Code</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
                        <td>Delete Item</td>

<?php endif; ?>
</tr>
<?php foreach ($charmInfoResult as $product) { ?>

    <tr>
   <td><?php echo $product['jewelryCategoryID']; ?></td>

    <td><?php echo $product['jewelryCode']; ?></td>
    <td><?php echo $product['jewelryName']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td><?php echo $product['price']; ?></td>
    <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
    <td>
    <form action='delete.php?name="<?php echo $product['jewelryCode']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $product['jewelryCode']; ?>">
        <input type="submit" name="submit" value="Delete">
    </td>
    </form><?php endif; ?>
</tr>

    <?php } ?>
    </table>
 <!-- End of Placing charms in table -->

    <?php foreach ($pendantNameResult as $product) { ?>
 <!-- Placing Pendants in table -->

<h4><?php echo $product['jewelryCategoryName']; ?></h4>
<?php } ?>
<table>
<tr>
                <td>CategoryID</td>
                <td>Code</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
                        <td>Delete Item</td>

<?php endif; ?>                
</tr>
<?php foreach ($pendantInfoResult as $product) { ?>
 
    <tr>
   <td><?php echo $product['jewelryCategoryID']; ?></td>

    <td><?php echo $product['jewelryCode']; ?></td>
    <td><?php echo $product['jewelryName']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td><?php echo $product['price']; ?></td>
    <?php  if (!empty($_SESSION['is_valid_admin'])) : //is not null : ?>
    <td>
    <form action='delete.php?name="<?php echo $product['jewelryCode']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $product['jewelryCode']; ?>">
        <input type="submit" name="submit" value="Delete">
    </td>
    </form><?php endif; ?>
</tr>

    <?php } ?>
     <!-- End of Placing Pendants in table -->

    </table>
    <footer>
    <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam. All rights reserved. </p>
  </footer>
        </main>