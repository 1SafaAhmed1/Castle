
<?php
include("auth_session.php");
require_once ('db.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Portal</title>
    <link rel="stylesheet" href="page_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
    <body> 
        <div class="container">
            <div class="navbar">
                <nav>
                    <ul id="MenuItems">
                    <li><h4>Hey, <?php echo $_SESSION['user_Id'];?>!</h4></li>
                        <li><h4><a href="index.html">Home</a></h4></li>
                        <li><h4><a href="">Requests</a></h4></li>
                        <li><h4><a href="">About</a></h4></li>
                        <li><h4><a href="">Contact</a></h4></li>
                        <?php
                        if(!empty($_SESSION['user_Id']))
                        {
                        ?>
                            <li><h4><a href="Logout.php">Logout</a></h4></li> 
                        <?php } else{ ?>
                            <li><h4><a href="Login_Form.php">Login</a></h4></li>
                        <?php }?>
                    </ul>
                </nav>
                <img src="images/cart.png" width="25px" height="25px">  
            </div>
        </div>
        <div class="small-container">
            <div class="row row-2">
                <h2 class="title">All Other Requests</h2>
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by Price</option>
                    <option>Sort by Popularity</option>
                    <option>Sort by Rating</option>
                </select>
            </div>
            <table class="ven_table">
                <tr>
                  <th>Company Name</th>
                  <th>Item Sold</th>
                  <th>Item Type</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
            <?php
            $sql = "SELECT Company_Name,Item_Sold,Item_Type,Quantity, Price, Status FROM vendor_requests";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["Company_Name"]."</td><td>".$row["Item_Sold"]."</td><td>".$row["Item_Type"]."</td><td>".$row["Quantity"]."pcs</td><td>".$row["Price"]."৳</td><td>".$row["Status"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
            ?>
            
                
            <div>
                &nbsp;&nbsp;
            </div>

            
                <div class="row row-2">
                    <h2 class="title">My Requests</h2>
                    <select>
                        <option>Default Sorting</option>
                        <option>Sort by Price</option>
                        <option>Sort by Quantity</option>
                    </select>
                </div>
    
                <table class="ven_table">
                    <tr>
                      <th>Item Sold</th>
                      <th>Item Type</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Status</th>
                    </tr>
                    <?php
            $sql = "SELECT Item_Sold,Item_Type,Quantity,Price,Status FROM `vendor_requests`WHERE Company_Name='abcompany';";
            //$sql="SELECT Item_Sold,Item_Type,Quantity,Price,Status FROM `vendor_requests`WHERE Company_Name='{$_SESSION['Company_Name']}'";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["Item_Sold"]."</td><td>".$row["Item_Type"]."</td><td>".$row["Quantity"]."pcs</td><td>".$row["Price"]."৳</td><td>".$row["Status"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
            ?>
            
            
            
            <a href="Vendor_Form.php" class="btn">Place Selling Request &#8594</a> 
              
        </div>

        <div>
            &nbsp;&nbsp;
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">    
                    <ul>
                        <li><h3>Follow Us</h4></li>
                        <li><img src="images/facebook.png" width="25px" height="25px"><a href=""></a></li>
                        <li><img src="images/twitter.png" width="25px" height="25px"><a href=""></a></li>
                        <li><img src="images/linkedin.png" width="25px" height="25px"><a href=""></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </body>
</html> 
