<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="form_style.css">
  </head>
  <body>
    <div class="form_field">
      <h1>Request Details</h1>
      <form method="post">

        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Company Name</label>
        </div>

        <div class="usrtype" style="width:80%">
          <label>Item Sold:  </label>
              <select name="Item Sold" required>
                <option value="Paper"checked>Paper</option> 
                <option value="BackCover">BackCover</option> 
                <option value="Coated Paper">Coated Paper</option> 
                <option value="Ink">Ink</option> 
                <option value="Canvas">Canvas</option> 
                <option value="Glass">Glass</option> 
                <option value="Adhesive">Adhesive</option> 
              </select>
        </div>
 
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Item Type</label>
        </div>
           
        <div class="txt_field">
            <input type="number" required>
            <span></span>
            <label>Quantity</label>
        </div>
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Price</label>
        </div>

        <input type="submit" value="Place Request">
        <div class="registration">
          Changed your mind? <a href="Vendor Portal.html"><u>Go back</u></a>
        </div>
      </form>
    </div>

  </body>
</html>

