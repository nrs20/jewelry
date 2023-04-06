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
        $db = getDB();
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
    //add_jewelry_manager("kylerPhillips22@gmail.com","pk90321", "Kyler", "Phillips");
    $emails = ["kylerPhillips22@gmail.com","johnSanchez092@gmail.com","phillipOntario@gmail.com"];
    $passwords = ["s3sme","no","yes"];
    $firstNames = ["Kyler","John","Phillip"];
    $lastNames = ["Phillips", "Sanchez", "Ontario"];

    for($x = 0; $x<3; $x+=1)
    {
        add_jewelry_manager($emails[$x], $passwords[$x], $firstNames[$x], $lastNames[$x]);
    }
    /*
    add_jewelry_manager("kylerPhillips22@gmail.com","s3sme", "Kyler", "Phillips");

    //add_jewelry_manager("johnSanchez092@gmail.com","sammy&#2h", "John","Sanchez");

    add_jewelry_manager("johnSanchez092@gmail.com","s3sme", "John","Sanchez");

    //add_jewelry_manager("phillipOntario@gmail.com","kermitbcsh3643","Phillip","Ontario");

    add_jewelry_manager("phillipOntario@gmail.com","s3sme","Phillip","Ontario");
    */
?>