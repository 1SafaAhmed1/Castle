<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>
  <body>
    <div class="form_field">
      <h1>Order Details</h1>
      <form method="post">

        <div class="gend" required>  
            <label>Glass Type: </label>
            <input type="radio" value="Plexi" name="coatedpaper" checked > Plexi&nbsp; 
            <input type="radio" value="Acrylic" name="coatedpaper"> Acrylic&nbsp;
        </div> 

        <div class="usrtype" style="width:80%">
          <label>Painting Size in Inches:   </label>
              <select name="PaintingSize" required>
                <option value="10” x 10”"checked>10” x 10”</option> 
                <option value="12” x 12”">12” x 12”</option> 
                <option value="14” x 14”">14” x 14”</option> 
                <option value="16” x 16”">16” x 16”</option> 
                <option value="18” x 18”">18” x 18”</option> 
                <option value="20” x 20”">18” x 18”</option> 
              </select>
        </div>

        <div class="txt_field">
          <input type="number" required>
          <span></span>
          <label>Quantity</label>
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
                        <input type="file" name="upload" accept="application/pdf,application/vnd.ms-excel" required>
                        <span></span>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        
        <div class="txt_field">
            <input type="address" required>
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

