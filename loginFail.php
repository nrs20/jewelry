 
<!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page contains the login form if there were invalid credentials.
I made this page to fix the issue of login.php loggin in the user regardless of valid credentials.
-->
<?php include('header.php');?>
<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
  <main>
    
    <h2>Login</h2>
    <form action="authenticate2.php" method="post">
      <label>Email:</label>
      <input type="text" name="email" value="" required />
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="" required/>
      <br>
      <input type="submit" value="Login">
    </form>
    <?php if (!isset($login_message)) {
 $login_message = 'Invalid credentials. Please try again.';
}?>
    <p><?php echo $login_message; ?></p>
  </main>
  </body>
</html>