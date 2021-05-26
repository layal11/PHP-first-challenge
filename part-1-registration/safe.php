<!-- $name= $_POST["username"]; // $_POST will get the value of the username from file home.php -->
<!-- echo "Hello " . $name . ". Here is your information"; -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
session_start(); 
// print_r($_SESSION["user"]);
?>

<div class="full-container">
<div class="registration-container">

  <table>
    <tr>
     <td> <label for="id-name">Full Name</label> </td>
     <!-- <td><?=$_SESSION["user"]["name"] ?> </td> -->
     <td> <?php echo $_SESSION["user"]["name"] ?> </td> 
    </tr>

    <tr>
     <td><label for="id-username">Username </label></td>
     <td> <?php echo $_SESSION["user"]["username"] ?> </td> 
     </tr>

    <tr>
     <td><label for="id-email">Email <label></td>
     <td> <?php echo $_SESSION["user"]["email"] ?> </td>
    </tr>

    <tr>
     <td><label for="id-phone">Phone <label></td>
     <td> <?php echo $_SESSION["user"]["phone"] ?> </td> 
    </tr>

    <tr>
     <td><label for="dob">Date Of Birth <label> </td>
     <td> <?php echo $_SESSION["user"]["dob"] ?> </td> 
    </tr>
    
    <tr>
     <td><label for="id-ssn">Social Security Number <label></td>
     <td> <?php echo $_SESSION["user"]["ssn"] ?> </td> 

    </tr>
  </table>
</div>

</body>
</html>
