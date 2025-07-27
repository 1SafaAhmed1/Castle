
<?php
require('db.php');
include("auth_session.php");
//$query = "SELECT firstname, lastname FROM `User` WHERE user_Id='$_SESSION['user_Id']' ";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Portal</title>
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
                <h2 class="title">All Products</h2>
                <select>
                    <option>Default Sorting</option>
                    <option>Sort by Price</option>
                    <option>Sort by Popularity</option>
                    <option>Sort by Rating</option>
                </select>
            </div>
            <div class="row">
                <div class="col" >
                    <a href="Book_Order_Form.php"><img src="images/product-1.jpg"></a>
                    <h4>Books</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>Base price</h5>
                    <p>500.00&#2547;</p>
                </div>

                <div class="col">
                    <a href="Brochure_Order_Form.php"><img src="images/product-2.jpg"></a>
                    <h4>Brochures</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>Base price</h5>
                    <p>250.00&#2547;</p>
                </div>

                <div class="col">
                    <a href="Painting_Order_Form.php"><img src="images/product-3.jpg"></a>
                    
                    <h4>Paintings</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>Base price</h5>
                    <p>700.00&#2547;</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <a href="Business_Card_Order_Form.php"><img src="images/product-4.jpg"></a>
                    <h4>Business Card</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>Base price</h5>
                    <p>200.00&#2547;</p>
                </div>
                <div class="col">
                    <a href="Sticker_Order_Form.php"><img src="images/product-5.jpg"></a>
                    <h4>Stickers</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>Base price</h5>
                    <p>250.00&#2547;</p>
                </div>

            </div>

            
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>&#8594;</span>
            </div>
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