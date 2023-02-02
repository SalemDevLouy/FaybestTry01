<?php
session_start();
?>


    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FYBAST Shop</title>
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
                  <li><a href="acount.php">ACOUNT </a></li>
                  <li><a href="#">ABOUT US</a></li>
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
        <!---------------  categories ---------------->
    
        <div class="categories">
          <div class="small-container">
            <div class="row catugorie">
              <div class="col-3 shoes fff">
                <form action="" method="post"><img src="images/category-1.png" value="Shoes"/><input type="submit" name="catug" value="Shoes" class="btn" name ="catug"></form>
              </div>
              <div class="col-3 acc">
                <form action="" method="post"><img src="images/category-2.png" value="Clouthes" /><input type="submit" name="catug" value="Clouthes" class="btn" name ="catug"></form>
              </div>
              <div class="col-3 clo">
                <form action="" method="post"><img src="images/category-3.png" value="Accessory" /><input type="submit" name="catug" value="Accessory" class="btn" name ="catug"></form>
              </div>
            </div>
          </div>
        </div>
    
        <!--------------- Featured products ---------------->
        <div class="small-container">
<h2 class="tittle" id="Ft-P">Featured Products</h2>
<div class="row">
<?php
include('connection.php');
 $resultpro = mysqli_query($mysqli,"SELECT * FROM products WHERE Fproduct = '1' ");
while($row = mysqli_fetch_assoc($resultpro)){
		echo "<div class='col-4'>
			<form method='post' action='' class='form-product'>
			<input type='hidden' name='code' value=".$row['code']." />
			<div class='pro-image iii'><img src='".$row['image']."' /></div>
			<h4>".$row['name']."</h4>
			<div class='rating' >
			<i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>

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

<!-----------------------------MP--------------------- -->


<?php
include('connection.php');
if(empty($_POST['catug'])) {
  $codecat = '';
}else{
  $codecat = $_POST['catug'];
	}
if($codecat == ''){
    $resultpro = mysqli_query($mysqli,"SELECT * FROM `products` ");
    echo '<div class="small-container">' .
        '<h2 class="tittle" id="Ft-P">Some Products</h2>' .
        '<div class="row">';
}else{
    $resultpro = mysqli_query($mysqli,"SELECT * FROM products WHERE codecate = '$codecat' ");
    echo "<div class='small-container'>
        '<h2 class='tittle' id='Ft-P'> $codecat  Products</h2> <div class='row'>";
}		
 $counter =0;
while($row = mysqli_fetch_assoc($resultpro)){
    $counter++;
		echo "<div class='col-4'>
			<form method='post' action='' class='form-product'>
			<input type='hidden' name='code' value=".$row['code']." />
			<input type='hidden' name='id' value=".$row['id']." />
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
            if ($counter==10) {
        break;
            }
		}
		?>
	</div>
	</div>
	</div>
    <div class="all-btn"><a href="Allpro.php"  class="btn-A ">Show All Products &#8594;</a></div>

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

     <!-------------------- sponsor ------------------->'.

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

    <!-------------------- footer ------------------->'

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
            </ul
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
        <p class="copy-right">Louafi Salem Abdeldjouad&Amrani Farouk Hossam-Eddine</p>'.
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