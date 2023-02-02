<?php
session_start();
?>


    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Redstore | Ecommerce Website Design</title>
        <link rel="stylesheet" href="CSS/Style.css" />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet"
        />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
      </head>
      <body>
        <div class="header">
          <div class="container">
            <div class="navBar">
              <div class="logo">
                <img src="images/logo.png" width="125px" />
              </div>
              <nav>
                <ul id="MenuItems">
                  <li><a href="IndexAc.php">HOME</a></li>
                  <li><a href="Allpro.php">All PRODUCTS</a></li>
                  <li><a href="">ACOUNT</a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
                </ul>
              </nav>
              <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
            </div>
            <div class="row">
              <div class="col-2">
                <h1>
                  Get The Best Products  <br />
                  From Our Store!
                </h1>
                <p>
                  Success isn't always about greatness. It's about consistencu
                  Consistent <br />
                  hard work gains success. Greatness Will come
                </p>
                <a href="#Ft-P" class="btn">Explore Now &#8594;</a>
              </div>
              <div class="col-2">
                <img src="images/image1.png" />
              </div>
            </div>
          </div>
        </div>

<?php
include('connection.php');
?>
<div class="small-container">
<h2 class="tittle" id="Ft-P">All Products </h2>
<div class="row">
<?php
 $resultpro = mysqli_query($mysqli,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($resultpro)){
		echo "<div class='col-4'>
			<form method='post' action='' class='form-product'>
			<input type='hidden' name='code' value=".$row['code']." />
			<div class='pro-image'><img src='".$row['image']."' /></div>
			<h4>".$row['name']."</h4>
			<div class='rating'>
			<i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star-o'></i>
			</div>
			<p>$".$row['price']."</p>
			<input type='submit'value='Add To Cart' class='btn' />
			</form>
			</div>";
		}
		?>
	</div>
	</div>
	</div>


   <!--------------------------- Offer ------------------------->

    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="images/exclusive.png" class="offer-img" />
          </div>
          <div class="col-2">
            <p>Exlusive Available on RedStore</p>
            <h1>Smart Brand 4</h1>
            <small>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi
              nihil temporibus ipsa repudiandae quo enim reiciendis
            </small>
            <a href="#" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>

     <!-------------------- sponsor ------------------->

    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="images/logo-coca-cola.png" />
          </div>
          <div class="col-5">
            <img src="images/logo-paypal.png" />
          </div>
          <div class="col-5">
            <img src="images/logo-philips.png" />
          </div>
        </div>
      </div>
    </div>

    <!-------------------- footer ------------------->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Androd and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png" />
              <img src="images/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo.png" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam in
              eos error? Suscipit officia aliquid
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Compus</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copy-right"></p>
      </div>
    </div>
  </body>
</html>
 
 
<?php
include('connection.php');
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($mysqli,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$cartArray = array(
	$code=>array(
	'name'=>$row['name'],
	'code'=>$row['code'],
	'price'=>50,
	'quantity'=>1,
	'image'=>$row['image'])
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	}

	}
}
?>