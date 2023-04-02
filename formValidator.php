<!--
name:Natalia Smith
date: 1/31/2023
course name: IT202 section 004
assignment name: Unit 3 assignment 
email: nrs5@njit.edu.
This page validates the submitted form data. 
-->
<!DOCTYPE html>
<html lang="en">

<head>

  <title style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Squilliam's Jewels</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico.jpg">
  <title style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Squilliam's Jewels</title>
</head>

<body style="background-color:#F5D6BA">
  <main>
    <img class="logo" src="images/squill.jpg" alt="Squilliam's Jewels">
    <h1 class="correct">Squilliam's Jewels</h1>
    <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"></b> </p>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="home.php">Contact</a></li>
      <li><a href="shipping.php">Place Order</a></li>
      <li><a href="login.php">Log In</a></li>
    </ul>

    <p class="address"><u>Address:</u></p>
    <p class="address"><u>Address:</u></p>
    <p id="street">266 North St </p>
    <p class="street2"> Whitney Point, New York, 13862 </p>
    <?php
    //get the data from the form
    $fname = filter_input(INPUT_GET, 'fname');
    $lname = filter_input(INPUT_GET, 'lname');
    $address = filter_input(INPUT_GET, 'address');
    $city = filter_input(INPUT_GET, 'city');
    $zipCode = filter_input(INPUT_GET, 'zipCode');
    $state = filter_input(INPUT_GET, 'state');
    $value = filter_input(INPUT_GET, 'value', FILTER_VALIDATE_INT);
    $dimensions = filter_input(INPUT_GET, 'dimensions', FILTER_VALIDATE_INT);
    $orderNumber = filter_input(INPUT_GET, 'orderNumber', FILTER_VALIDATE_INT);
    $shipDate = filter_input(INPUT_GET, 'shipDate');
    $shippingChoice = $_GET['shippingChoice'];

    $link_address = "shipping.php";
    $error_message = '';
    $numlength = mb_strlen(($zipCode));
    if ($numlength != 5) {
      //$error_message .= $numlength;
      $error_message .= ' Zip Code must be 5 digits! ';
    }
    if ((int)($zipCode) < 0)
      $error_message .= 'Zip Code must be greater than 0! ';
    if (!is_numeric($zipCode)) {
      $error_message .= 'Zip Code must be a number. ';
    }



    if ($value < 0) {
      $error_message .= ' Value must be greater than 0! ';
    } else if ($value > 150) {
      $error_message .= ' Value must be no more than $150! ';
    }

    if ($dimensions > 36) {
      $error_message .= ' Dimensions must be no more than 36! ';
    } else if ($dimensions < 1) {
      $error_message .= ' Dimensions must be no less than 1! ';
    }


    $state_list = array(
      'AL', 'AK', 'AZ', 'AR',  'CA',  'CO',  'CT',  'DE',  'DC',
      'FL',  'GA',  'HI',  'ID',  'IL',  'IN',  'IA',  'KS',  'KY',  'LA',  'ME',  'MD',
      'MA',  'MI',  'MN',  'MS',  'MO',  'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC',
      'ND', 'OH',  'OK',  'OR',  'PA',  'RI',  'SC',  'SD', 'TN',  'TX',  'UT',  'VT',
      'VA',  'WA',  'WV',  'WI',  'WY'
    );
    $state_Full = array(
      'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut',
      'Delaware', 'District Of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho',
      'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts',
      'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana',
      'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina',
      'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
      'Rhode Island', 'South Carolina', 'South Dakota',
      'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia',
      'Wisconsin', 'Wyoming',
    );
    if (strlen($state) == 2) //check if state is abbreviated then check for validitiy
    {
      if (in_array($state, $state_list)) {
        //echo "YES IT IS A STATE";
      } else {
        $error_message .= ' State is invalid. ';
      }
    } else if (strlen($state) > 2) {
      if (in_array($state, $state_Full)) {
        // echo "YES IT IS A STATE";
      } else
        $error_message .= ' State is invalid. ';
    }
    ?>


    <?php if ($error_message == '') {
      include('ValidFormDisplay.php');
      exit();
    } else if ($error_message != '') {
      include('formInput.php');
      echo '<p class="error_message"> <b> Error:</b> ' . $error_message . '</p>';
      exit();
    }


    ?>
  </main>
</body>
<footer>
  <p class="copyright">Copyright &copy; 1960 - 2023 Squilliam. All rights reserved. </p>
</footer>

</html>