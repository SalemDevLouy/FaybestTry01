<?php 
	session_start();
	include('connection.php');
?>

     <!DOCTYPE html>
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
		              <li><a href="Index.php">HOME</a></li>
		              <li><a href="#">ABOUT US</a></li>
		              <li><a href="login.php">LOGIN</a></li>
		              <li><a href="register.php">SINGUP</a></li>
		            </ul>
		          </nav>
		        </div>
		        <div class="row">
		          <div class="col-2">
		            <h1>
		              Get The Best Products  <br />
		              From Our Store!
		            </h1>
		            <p>
		              Success isn't always about greatness. It's about consistencu.
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
		
		   <!--------------- Featured categories ---------------->';

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
			<div class='pro-image'><img src='".$row['image']."' /></div>
			<h4>".$row['name']."</h4>
			<div class='rating'>
			<i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>

			</div>
			<p>$".$row['price']."</p>
			</form>
			</div>";
		}
		?>
	</div>
	</div>
	</div>
<!------------------------More Products------------------------------------>
<div class="small-container">
		<h2 class="tittle" id="Ft-P">More Products</h2>
				<div class="row">

					<?php
					include('connection.php');
					$resultpro = mysqli_query($mysqli,"SELECT * FROM `products`");
					$counter = 0;
					while($row = mysqli_fetch_assoc($resultpro)){
						$counter++;
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
					</form>
					</div>";
					if ($counter==8) {
							break;
					}
				}
				?>
				</div>
			</div>
		</div>


   <!-------------------- brands -------------------->
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
              eos error? Suscipit officia aliquid'.
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
        <p class="copy-right">Louafi Salem Abdeldjouad&Amrani Farouk Hossam-Eddine</p>
      </div>
    </div>

    <script>
   var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";
   function menutoggle() {
       if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
     }
      }
   </script>
  </body>
</html>
<?php 

?>


