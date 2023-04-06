<!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page contains a login form.
-->
<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
  <main>
    <?php include('header.php'); ?>
    <h2>Login</h2>
    <form action="authenticate2.php" method="post">
      <label>Email:</label>
      <input type="text" name="email" required/>
      <br>
      <label>Password:</label>
      <input type="password" name="password" required/>
      <br>
      <input type="submit" value="Login">
    </form>
    <?php if (!isset($login_message)) {
 $login_message = 'You must login to view this page.';
}?>
    <p><?php echo $login_message; ?></p>
  </main>
  </body>
</html>
