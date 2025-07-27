<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>
  <body>

  <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['Company_Name'])) {
            // removes backslashes
            $Company_Name = stripslashes($_REQUEST['Company_Name']);
            $Item_Sold = stripslashes($_REQUEST['Item_Sold']);
            //escapes special characters in a string
            $Company_Name = mysqli_real_escape_string($con, $Company_Name);
            $Item_Sold = mysqli_real_escape_string($con, $Item_Sold);
            //notsure
            $Item_Type = stripslashes($_REQUEST['Item_Type']);
            $Item_Type = mysqli_real_escape_string($con, $Item_Type);
            $Quantity   = stripslashes($_REQUEST['Quantity']);
            $Quantity   = mysqli_real_escape_string($con, $Quantity);
            $Price    = stripslashes($_REQUEST['Price']);
            $Price    = mysqli_real_escape_string($con, $Price);
            //notsure
            $Status    = stripslashes($_REQUEST['Status']);
            $Status    = mysqli_real_escape_string($con, $Status);
            
            $query    = "INSERT into `vendor_requests` (Company_Name,Item_Sold,Item_Type,Quantity,Price,Status) 
            VALUES ('$Company_Name','$Item_Sold','$Item_Type',$Quantity,$Price,'Pending')";
            $result   = mysqli_query($con, $query);
            if ($result) {
              if(isset($_POST['submit'])){
                header("Location: Customer_Portal.php");
              }
            } else {
                echo "Required fields are missing.<br/>";
                      
            }
        } 

    ?>
    <div class="form_field">
      <h1>Request Details</h1>
      <form action="" method="POST">

        <div class="txt_field">
            <input type="text" name="Company_Name" required>
            <span></span>
            <label>Company Name</label>
        </div>

        <div class="usrtype" style="width:80%">
          <label>Item Sold:  </label>
              <select name="Item Sold" required>
                <option value="Paper" name="Item_Sold" checked>Paper</option> 
                <option value="BackCover" name="Item_Sold" >BackCover</option> 
                <option value="Coated Paper" name="Item_Sold">Coated Paper</option> 
                <option value="Ink" name="Item_Sold">Ink</option> 
                <option value="Canvas" name="Item_Sold">Canvas</option> 
                <option value="Glass" name="Item_Sold">Glass</option> 
                <option value="Adhesive" name="Item_Sold">Adhesive</option> 
              </select>
        </div>
 
        <div class="txt_field">
          <input type="text" name="Item_Type" required>
          <span></span>
          <label>Item Type</label>
        </div>
           
        <div class="txt_field">
            <input type="number" name="Quantity" required>
            <span></span>
            <label>Quantity</label>
        </div>
        <div class="txt_field">
            <input type="number" name="Price" required>
            <span></span>
            <label>Price</label>
        </div>

        <input type="submit" value="Place Request">
        <div class="registration">
          Changed your mind? <a href="Vendor_Portal.php"><u>Go back</u></a>
        </div>
      </form>
    </div>

  </body>
</html>

