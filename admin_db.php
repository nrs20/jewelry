 <!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page contains the is_valid_admin function which determines whther or not the login was successful. 
-->
<?php

require_once('database.php');

function is_valid_admin_login($email, $password)
{
    $db = getDB();
    $query = 'SELECT password FROM jewelryManagers
    WHERE emailAddress = :email';
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $row = $statement->fetch();
  $statement->closeCursor(); 

if( $row== false)
{
  $_SESSION['is_valid_admin'] = false;

return false;
}
else
{
  $hash = $row['password'];
  if (password_verify($password,$hash)){
    session_start();
    $_SESSION['is_valid_admin'] = true;

  }
}
}


/*
 // successful login

   // if (password_verify($password, $row['password'])) {
       // $_SESSION['pass'] = $password . "poop";

      // $_SESSION['fName'] = $row['firstName'];
        //$_SESSION['lName'] = $row['lastName'];
        //$_SESSION['email'] = $email;
       // $statement->closeCursor();
      //  return true;
   // }
   // else {
        // incorrect password, fail out and try login again
        //header("Location: loginFail.php");
      //  return false;
   // }

//?>
*/
?>
   