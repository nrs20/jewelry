 <!--
name:Natalia Smith
date: 4/6/2023
course name: IT202 section 004
assignment name: Unit 9 Assignment
email: nrs5@njit.edu.
This page contains the is_valid_admin function which determines whther or not the login was successful. 
-->
<?php
    function add_jewelry_manager($email, $password, $firstName, $lastName) {
        $dsn = 'mysql:host=localhost;dbname=jewelry_store';
        $username = 'root';
        $password = '';
    
        try
        {
            $db = new PDO($dsn, $username, $password);
                    //include('header.php'); //success page
                   // include('products.php'); //table page
        }
        catch (PDOException $exception)
        {
           // include('headerError.php'); //error page
            $error_message = $exception->getMessage();
            echo "$error_message";
            
            exit();
        }
        //$db = getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'INSERT INTO jewelryManagers (emailAddress, password, firstName, lastName)
                  VALUES (:email, :password, :firstName, :lastName)';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hash);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->execute();
        $statement->closeCursor();
    }
    add_jewelry_manager("kylerPhillips22@gmail.com","pk90321", "Kyler", "Phillips");
    add_jewelry_manager("johnSanchez092@gmail.com","sammy&#2h", "John","Sanchez");

    add_jewelry_manager("phillipOntario@gmail.com","kermitbcsh3643","Phillip","Ontario");
?>