<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>
  <body>

  <?php

    function debug_to_console($data) {
      $output = $data;
      if (is_array($output))
          $output = implode(',', $output);

      echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $pass = md5($password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `User` WHERE email='$email' AND password= '$pass'";

        
        if($query!= NULL){
          debug_to_console("ITS WORKING") ;
        }
        else{
          debug_to_console("QUERY IS EMPTY");
        }
        
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['email'] = $email;
            debug_to_console("You are now logged in");
            header("Location: Customer_Portal.php");
          
        } else {
          debug_to_console("FAILED");
        }
    } 
  ?>

    <div class="form_field">
      <h1>Login</h1>
      <form action="" method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="passw"><u>Forgot Password?</u></div>
        <input type="submit" name='submit' value="login">
        <div class="registration">
          Don't have an account? <a href="Registration_Form.php"><u>Register Here</u></a>
        </div>
      </form>
     
    </div>

  </body>
</html>
