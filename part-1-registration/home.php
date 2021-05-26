<!-- post method more secure  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration and Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <div class="full-container">

    <form method="post" action="home.php">
      <!-- send the form-data to home.php. -->

      <div class="registration-container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <table>
          <tr>
            <td> <label for="id-name">Full Name</label> </td>
            <td> <input type="text" placeholder="Enter Your Name" id="id-name" name="name" value="<?php if (isset($_POST["name"])) { echo $_POST["name"]; } else { echo ""; } ?>"> </td>
          </tr>

          <tr>
            <td><label for="id-username">Username </label></td>
            <td><input type="text" placeholder="Enter Your Username" id="id-username" name="username" value="<?php if (isset($_POST["username"])) { echo $_POST["username"]; } else { echo ""; } ?>"></td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["username"]) || empty($_REQUEST["username"])) {
                  echo "<span class=\"span-color\">Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="id-password">Password </label></td>
            <td><input type="password" placeholder="Enter Your Password" id="id-password" name="password" value="<?php if (isset($_POST["password"])) { echo $_POST["password"]; } else { echo ""; } ?>"></td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["password"]) || empty($_REQUEST["password"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="confirm-password">Confirm Password <label></td>
            <td><input type="password" placeholder="Confirm Password" name="confirm-password" value="<?php if (isset($_POST["confirm-password"])) { echo $_POST["confirm-password"]; } else { echo ""; } ?>"> </td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["confirm-password"]) || empty($_REQUEST["confirm-password"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="id-email">Email <label></td>
            <td><input type="email" placeholder="Enter Your Email" id="id-email" name="email" value="<?php if (isset($_POST["email"])) { echo $_POST["email"]; } else { echo ""; } ?>"></td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["email"]) || empty($_REQUEST["email"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="id-phone">Phone <label></td>
            <td><input type="tel" placeholder="03-123456" id="id-phone" name="phone" pattern="[0-9]{2}-[0-9]{6}" value="<?php if (isset($_POST["phone"])) { echo $_POST["phone"]; } else { echo ""; } ?>"></td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["phone"]) || empty($_REQUEST["phone"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="dob">Date Of Birth <label> </td>
            <td><input type="text" placeholder="mm/dd/yy" name="dob" value="<?php if (isset($_POST["dob"])) { echo $_POST["dob"]; } else { echo ""; } ?>"> </td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["dob"]) || empty($_REQUEST["dob"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="id-ssn">Social Security Number <label></td>
            <td><input type="text" placeholder="Enter Your SSN" id="id-ssn" name="ssn" value="<?php if (isset($_POST["ssn"])) { echo $_POST["ssn"]; } else { echo ""; } ?>"> </td>
            <td>
              <?php
              if (isset($_REQUEST["submit1"])) {
                if (!isset($_REQUEST["ssn"]) || empty($_REQUEST["ssn"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" id="id-sign-up" name="submit1" value="Sign Up"></td>
          </tr>
        </table>
      </div>
    </form>


    <form method="post" action="home.php">
      <div class="login-container">
        <h1>Log In</h1>
        <hr>
        <table>
          <tr>
            <td><label for="id-username2">Username </label> </td>
            <td><input type="text" placeholder="Enter Your Username" id="id-username2" name="username2" value="<?php if (isset($_POST["username2"])) { echo $_POST["username2"]; } else { echo ""; } ?>"> </td>
            <td>
              <?php
              if (isset($_REQUEST["submit2"])) {
                if (!isset($_REQUEST["username2"]) || empty($_REQUEST["username2"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td><label for="id-password2">Password </label></td>
            <td><input type="password" placeholder="Enter Your Password" id="id-password2" name="password2" value="<?php if (isset($_POST["password2"])) { echo $_POST["password2"]; } else { echo ""; } ?>"></td>
            <td>
              <?php
              if (isset($_REQUEST["submit2"])) {
                if (!isset($_REQUEST["password2"]) || empty($_REQUEST["password2"])) {
                  echo "<span>Required</span>";
                }
              }
              ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" id="id-submit2" name="submit2" value="Sign In"></td>
          </tr>
        </table>
      </div>
  </div>
  </form>

  <?php
  //indexed array
  $arrnames = [
    ["name" => "layal haidar", "username" => "layal", "password" => "1234", "email" => "layal@gmail.com", "phone" => "71-123456", "dob" => "01/01/98", "ssn" => "hgfh"],
    ["name" => "teddy shalhoub", "username" => "teddy", "password" => "1234", "email" => "teddy@gmail.com", "phone" => "03-123456", "dob" => "01/01/95",  "ssn" => "fgdf"],
    ["name" => "ghada yasine", "username" => "ghada", "password" => "1234", "email" => "ghada@gmail.com", "phone" => "70-123456", "dob" => "01/01/99",  "ssn" => "fgdf"],
    ["name" => "chris harm", "username" => "chris", "password" => "1234", "email" => "chris@gmail.com", "phone" => "71-123456", "dob" => "01/01/94",  "ssn" => "ghkj"]
  ];

  if (isset($_REQUEST["submit1"]) && !empty($_POST["name"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["confirm-password"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["dob"]) && !empty($_POST["ssn"])) {

    if ($_POST["password"] == $_POST["confirm-password"]) {

      $flag = 1;
      foreach ($arrnames as $row) {
        if ($_POST["username"] == $row["username"]) {
          $flag = 0;
        }
      }
      if ($flag == 0) {
        echo "<script> alert('Username already taken. Try another one.') </script>";
       } //else {
      //   session_start();
      //   $_SESSION["user"] = ["name" => $_POST["name"], "username" => $_POST["username"], "password" => $_POST["password"], "email" => $_POST["email"], "phone" => $_POST["phone"], "dob" => $_POST["dob"],  "ssn" => $_POST["ssn"]];
      //   header('Location: safe.php');
      // }
    } else {
      echo "<script> alert('Password doesn\'t match.') </script>";
    }
  }

  // extract($_POST); 
  if (isset($_REQUEST["submit2"]) && !empty($_POST["username2"]) && !empty($_POST["password2"])) {
    $flag = 1;
    foreach ($arrnames as $row) {
      if ($_POST["username2"] == $row["username"] && $_POST["password2"] == $row["password"]) {
        session_start();
        $_SESSION["user"] = $row;
        $flag = 0;
      }
    }
    if ($flag == 0) {
      header('Location: safe.php');
    } else {
      echo "<script> alert('Username or password not found')</script>";
    }
  }

  // $arrnames = [ 
  //   ["layal haidar","layal","1234", "layal@gmail.com", "71-123456","01/01/98","hgfh"],
  //   ["teddy shalhoub","teddy","1234", "teddy@gmail.com", "03-123456","01/01/95","fgdf"],
  //   ["ghada yasine","ghada","1234", "ghada@gmail.com", "70-123456","01/01/99","fgdf"],
  //   ["chris harm","chris","1234", "chris@gmail.com", "71-123456","01/01/94","ghkj"]
  // ];

  ?>

</body>
</html>