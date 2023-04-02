 <!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page contains the is_valid_admin function which determines whther or not the login was successful. 
-->

 <?php

    function is_valid_admin_login($email, $password)
    {
        $dsn = 'mysql:host=localhost;dbname=jewelry_store';
        $username = 'root';
        $password = '';

        try {
            $db = new PDO($dsn, $username, $password);
        } catch (PDOException $exception) {
            $error_message = $exception->getMessage();
            echo "$error_message";

            exit();
        }
        $query = 'SELECT password, firstName, lastName FROM jewelrymanagers
              WHERE emailAddress = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $row = $statement->fetch();
        if ($row == 0) {
            // row not found, fail out and try login again
            header("Location: loginFail.php");

            return 0;
        }
        // successful login
        else {
            $statement->closeCursor();
            $hash = $row['password'];
            $_SESSION['fName'] = $row['firstName'];
            $_SESSION['Lname'] = $row['lastName'];
            $_SESSION['email'] = $email;

            return password_verify($password, $hash);
        }
    }
    ?>