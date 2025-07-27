<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>

  <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['size'])) {
            
            $size = stripslashes($_REQUEST['firstname']);
            $count = stripslashes($_REQUEST['count']);
            
            $size = mysqli_real_escape_string($con, $size);
            $pcount = mysqli_real_escape_string($con, $pcount);
            
            $cover = stripslashes($_REQUEST['cover']);
            $cover = mysqli_real_escape_string($con, $cover);

            $file = $_FILES['file'];
            $name = $file['name'];
            
            $path = "uploads/" . basename($name);
            if (move_uploaded_file($file['tmp_name'], $path)) {
                echo "worked";
            } else {
                echo "error";
            }
            $fpath  = mysqli_real_escape_string($con, $path);


            $address    = stripslashes($_REQUEST['address']);
            $address    = mysqli_real_escape_string($con, $address);
            
            
            $query    = "INSERT into `Orders` (feel, size, quantity, filepath, address) 
            VALUES ('$cover','$size','$pcount','$fpath','$address')";
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


  <body>
    <div class="form_field">
      <h1>Order Details</h1>
      <form method="POST" action="" enctype="multipart/form-data">

        <div class="usrtype" style="width:80%">
          <label>Book Size in Inches:  </label>
              <select name="BookSize" required>
                <option name="size" value="4.25” x 6.87”"checked>4.25” x 6.87”</option> 
                <option name="size" value="5” x 8”">5” x 8”</option> 
                <option name="size" value="5.25” x 8”">5.25” x 8”</option> 
                <option name="size" value="5.5” x 8.5”">5.5” x 8.5”</option> 
                <option name="size" value="6” x 9”">6” x 9”</option> 
              </select>
        </div>
 
        <div class="txt_field">
          <input type="number" name="pcount" required>
          <span></span>
          <label>Page Count</label>
        </div>
           
        <div class="gend" required>  
          <label>Backcover Type: </label>
          <input type="radio" value="Hardback" name="cover" checked > Hardback&nbsp; 
          <input type="radio" value="Paperback" name="cover"> Paperback&nbsp;
          <input type="radio" value="Softcover" name="cover"> Softcover&nbsp;
        </div> 

        <div class="uf">
          <table style="width:100%">
            <tr>
              <td>
                <label>Upload File PDF </label>
              </td>
              <td>
                &nbsp;&nbsp;
              </td>
              <td>
                  <div class="upload_file">
                      <input type="file" name="file" required>
                      <span></span>
                </div>
              </td>
            </tr>
          </table>
        </div>
        
        <div class="txt_field">
          <input type="address" name="address" required>
          <span></span>
          <label>Delivery Address</label>
        </div>

        <input type="submit" value="Place Order">
        <div class="registration">
          Changed your mind? <a href="Customer_Portal.php"><u>Go back</u></a>
        </div>
      </form>
    </div>

  </body>
</html>

