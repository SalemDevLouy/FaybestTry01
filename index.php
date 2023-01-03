<?php session_start(); ?>
<!-- <html>
<head>
	<title>FY Store</title>
	<link href="style0.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/Style.css">
</head> -->
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		
		
	<?php	
	} else {
		//echo "You must be logged in to view this page.<br/><br/>";
		//echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
		
$string =  '<!DOCTYPE html>'.
'<html lang="en">'.
'  <head>'.
'    <meta charset="UTF-8" />'.
'    <meta http-equiv="X-UA-Compatible" content="IE=edge" />'.
'    <meta name="viewport" content="width=device-width, initial-scale=1.0" />'.
'    <title>Redstore | Ecommerce Website Design</title>'.
'    <link rel="stylesheet" href="CSS/Style.css" />'.
'    <link'.
'      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"'.
'      rel="stylesheet"'.
'    />'.
'    <link'.
'      rel="stylesheet"'.
'      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"'.
'    />'.
'  </head>'.
'  <body>'.
'    <div class="header">'.
'      <div class="container">'.
'        <div class="navBar">'.
'          <div class="logo">'.
'            <img src="images/logo.png" width="125px" />'.
'          </div>'.
'          <nav>'.
'            <ul id="MenuItems">'.
'              <li><a href="Index.html">HOME</a></li>'.
'              <li><a href="#">PRODUCTS</a></li>'.
'              <li><a href="#">ABOUT</a></li>'.
'              <li><a href="login.php">LOGIN</a></li>'.
'              <li><a href="register.php">SINGUP</a></li>'.
'            </ul>'.
'          </nav>'.
'        </div>'.
'        <div class="row">'.
'          <div class="col-2">'.
'            <h1>'.
'              Get The Best Sportswear  <br />'.
'              From Our Store!'.
'            </h1>'.
'            <p>'.
'              Success isn\'t always about greatness. It\'s about consistencu.'.
'              Consistent <br />'.
'              hard work gains success. Greatness Will come'.
'            </p>'.
'            <a href="#Ft-P" class="btn">Explore Now &#8594;</a>'.
'          </div>'.
'          <div class="col-2">'.
'            <img src="images/image1.png" />'.
'          </div>'.
'        </div>'.
'      </div>'.
'    </div>'.
''.
'    <!--------------- Featured categories ---------------->'.
''.
'    <div class="categories">'.
'      <div class="small-container">'.
'        <div class="row">'.
'          <div class="col-3">'.
'            <img src="images/category-1.jpg" />'.
'          </div>'.
'          <div class="col-3">'.
'            <img src="images/category-2.jpg" />'.
'          </div>'.
'          <div class="col-3">'.
'            <img src="images/category-3.jpg" />'.
'          </div>'.
'        </div>'.
'      </div>'.
'    </div>'.
''.
'    <!--------------- Featured products ---------------->'.
''.
'    <div class="small-container">'.
'      <h2 class="tittle" id="Ft-P">Featured Products</h2>'.
'      <div class="row">'.
'        <div class="col-4">'.
'          <img src="images/product-1.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-2.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-half-o"></i>'.
'            <i class="fa fa-star-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-3.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-half-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-4.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-sta-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'      </div>'.
''.
'      <h2 class="tittle">More Products</h2>'.
'      <div class="row">'.
'        <div class="col-4">'.
'          <img src="images/product-5.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-6.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-half-o"></i>'.
'            <i class="fa fa-star-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-7.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-half-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-8.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-sta-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'      </div>'.
''.
'      <div class="row">'.
'        <div class="col-4">'.
'          <img src="images/product-9.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-10.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-half-o"></i>'.
'            <i class="fa fa-star-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-11.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star-half-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'        <div class="col-4">'.
'          <img src="images/product-12.jpg" />'.
'          <h4>Red Printed Tshirt</h4>'.
'          <div class="rating">'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-star"></i>'.
'            <i class="fa fa-sta-o"></i>'.
'          </div>'.
'          <p>$50.00</p>'.
'        </div>'.
'      </div>'.
'    </div>'.
''.
'    <!--------------------------- Offer ------------------------->'.
''.
'    <div class="offer">'.
'      <div class="small-container">'.
'        <div class="row">'.
'          <div class="col-2">'.
'            <img src="images/exclusive.png" class="offer-img" />'.
'          </div>'.
'          <div class="col-2">'.
'            <p>Exlusive Available on RedStore</p>'.
'            <h1>Smart Band 4</h1>'.
'            <small>'.
'              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi'.
'              nihil temporibus ipsa repudiandae quo enim reiciendis.'.
'            </small>'.
'            <a href="#" class="btn">Buy Now &#8594;</a>'.
'          </div>'.
'        </div>'.
'      </div>'.
'    </div>'.
''.
'    <!-------------------- brands -------------------->'.
''.
'    <div class="brands">'.
'      <div class="small-container">'.
'        <div class="row">'.
'          <div class="col-5">'.
'            <img src="images/logo-coca-cola.png" />'.
'          </div>'.
'          <div class="col-5">'.
'            <img src="images/logo-paypal.png" />'.
'          </div>'.
'          <div class="col-5">'.
'            <img src="images/logo-philips.png" />'.
'          </div>'.
'        </div>'.
'      </div>'.
'    </div>'.
''.
'    <!-------------------- footer ------------------->'.
''.
'    <div class="footer">'.
'      <div class="container">'.
'        <div class="row">'.
'          <div class="footer-col-1">'.
'            <h3>Download Our App</h3>'.
'            <p>Download App for Androd and ios mobile phone.</p>'.
'            <div class="app-logo">'.
'              <img src="images/play-store.png" />'.
'              <img src="images/app-store.png" />'.
'            </div>'.
'          </div>'.
'          <div class="footer-col-2">'.
'            <img src="images/logo-white.png" />'.
'            <p>'.
'              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam in'.
'              eos error? Suscipit officia aliquid'.
'            </p>'.
'          </div>'.
'          <div class="footer-col-3">'.
'            <h3>Useful Links</h3>'.
'            <ul>'.
'              <li>Compus</li>'.
'              <li>Blog Post</li>'.
'              <li>Return Policy</li>'.
'              <li>Join Affiliate</li>'.
'            </ul>'.
'          </div>'.
'          <div class="footer-col-4">'.
'            <h3>Follow Us</h3>'.
'            <ul>'.
'              <li>Facebook</li>'.
'              <li>Twitter</li>'.
'              <li>Instagram</li>'.
'              <li>Youtube</li>'.
'            </ul>'.
'          </div>'.
'        </div>'.
'        <hr />'.
'        <p class="copy-right">Amrani Farouk Hossam-Eddine</p>'.
'      </div>'.
'    </div>'.
''.
'    <script>'.
'      var MenuItems = document.getElementById("MenuItems");'.
''.
'      MenuItems.style.maxHeight = "0px";'.
'      function menutoggle() {'.
'        if (MenuItems.style.maxHeight == "0px") {'.
'          MenuItems.style.maxHeight = "200px";'.
'        } else {'.
'          MenuItems.style.maxHeight = "0px";'.
'        }'.
'      }'.
'    </script>'.
'  </body>'.
'</html>';

 echo $string;
		
	}
	?>
</html>
