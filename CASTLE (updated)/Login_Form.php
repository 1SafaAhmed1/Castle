<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>
  <body>

  <?php
    require('db.php');
    
    
    if (isset($_REQUEST['email'])) {
        $email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $pass = md5($password);
        $ut= "customer";
 
        $query = "SELECT user_Id, usertype FROM `User` WHERE email='$email' AND password= '$pass'";

        
    
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);


        if ($rows > 0 ) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['user_Id'] = $row["user_Id"];
                if($row["usertype"]==$ut){
                    //$_SESSION['firstname'] = $row["firstname"];
                    header("Location: Customer_Portal.php");
                }
                else{
                
                  //$_SESSION['Company_Name'] = $row["Company_Name"];
                  header("Location: Vendor_Portal.php");
                }
            }
                
            
        } else {
            echo "no result";
        }
    } 
    else{
        //echo "isset error";
    }
  ?>

  

    <div class="form_field">
      <h1>Login</h1>
      <form action="" method="post">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
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
