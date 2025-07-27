
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>

  

  <body>

      <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['firstname'])) {
            // removes backslashes
            $firstname = stripslashes($_REQUEST['firstname']);
            $lastname = stripslashes($_REQUEST['lastname']);
            //escapes special characters in a string
            $firstname = mysqli_real_escape_string($con, $firstname);
            $lastname = mysqli_real_escape_string($con, $lastname);
            //notsure
            $dob = stripslashes($_REQUEST['dob']);
            $dob = mysqli_real_escape_string($con, $dob);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
            $phone_num    = stripslashes($_REQUEST['phone_num']);
            $phone_num    = mysqli_real_escape_string($con, $phone_num);
            //notsure
            $gender    = stripslashes($_REQUEST['gender']);
            $gender    = mysqli_real_escape_string($con, $gender);
            //notsure
            $usertype    = stripslashes($_REQUEST['usertype']);
            $usertype    = mysqli_real_escape_string($con, $usertype);

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $pass = md5($password);
            
            $query    = "INSERT into `User` (firstname, lastname, dob, email, phone_num, gender, usertype, password) 
            VALUES ('$firstname','$lastname','$dob','$email','$phone_num','$gender','$usertype', '$pass')";
            $result   = mysqli_query($con, $query);
            if ($result) {
              if(isset($_POST['submit'])){
                header("Location: Customer_Portal.php");
              }
            } else {
                echo "<div class='form'>
                      <h3>Required fields are missing.</h3><br/>
                      <p class='link'>Click here to <a href='Registration_Form.php'>Registration</a> again.</p>
                      </div>";
            }
        } 

    ?>

    

    <div class="form_field">
      <h1>Registration</h1>
      <form action="" method="POST">
        
        <div class="name">
          <table style="width:100%">
            <tr>
              <td>
                <div class="txt_field">
                  <input type="text" name="firstname" required>
                  <span></span>
                  <label>First name</label>
                </div>
              </td>
              <td>
                &nbsp;&nbsp;
              </td>
              <td>
                <div class="txt_field">
                  <input type="text" name="lastname"required>
                  <span></span>
                  <label>Last name</label>
                </div>
              </td>
            </tr>
          </table>
        </div>
        
        <div class="dob">
          <table style="width:100%">
            <tr>
              <td>
                <label>Date Of Birth: </label>
              </td>
              <td>
                &nbsp;&nbsp;
              </td>
              <td>
                <div class="txt_field">
                  <input type="date" name="dob" required>
                  <span></span>
                </div>
              </td>
            </tr>
          </table>
        </div>
        
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="phn">
          <div class="txt_field">
            <input type="number" name="phone_num" required>
            <span></span>
            <label>Phone Number</label>
          </div>
        </div>
        

           
        <div class="gend" required>  
          <label>Gender : </label>
          <input type="radio" value="Male" name="gender" checked > Male&nbsp;&nbsp; 
          <input type="radio" value="Female" name="gender"> Female&nbsp;&nbsp;
          <input type="radio" value="Other" name="gender"> Other&nbsp;&nbsp;
        </div>  

        <div class="usrtype" style="width:100%">
          <label>Usertype: </label>
              <select name="usertype" required>
                <option value="customer"checked>Customer</option> 
                <option value="vendor">Vendor</option> 
                <option value="admin">Admin</option> 
              </select>
        </div>  
      
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Set Password</label>
        </div>
        <div class="txt_field">
          <input type="password"  name="password" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        
        <input type="submit" name='submit' value="Register">
        <div class="registration">
          Already have an account? <a href="Login_Form.php"><u>Login</u></a>
        </div>
        
      </form>
    </div>

  </body>
</html>
