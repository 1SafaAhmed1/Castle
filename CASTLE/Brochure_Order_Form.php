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
            <label>Coated Paper Type: </label>
            <input type="radio" value="Matte" name="coatedpaper" checked > Matte&nbsp; 
            <input type="radio" value="Glossy" name="coatedpaper"> Glossy&nbsp;
        </div> 

        <div class="usrtype" style="width:80%">
          <label>Brochure Size in Inches:  </label>
              <select name="BrochureSize" required>
                <option value="8.5 x 11"checked>8.5 x 11”</option> 
                <option value="8.5 x 14">8.5 x 14</option> 
                <option value="11 x 17">11 x 17</option> 
                <option value="11 x 25.5">11 x 25.5</option> 
                <option value="6” x 9”">6” x 9”</option> 
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

