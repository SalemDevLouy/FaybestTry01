<?php
session_start();
?>


    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>
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
                  <li><a href="adminpage.php">HOME</a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
                </ul>
              </nav>
              <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
            </div>
            <div class="row">
              <div class="col-2">
                <h1>
                  Hi Admin 
                </h1>
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
			<input type='hidden' name='id' value=".$row['id']." />
			<div class='pro-image'><img src='".$row['image']."' /></div>
			<h4>".$row['name']."</h4>
			<h4>ID : ".$row['id']."</h4>
			<div class='rating'>
			<i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star-o'></i>
			</div>
			<p>$".$row['price']."</p>
			<input type='submit' name='remove' value='Remove' class='btn' />
			</form>
			</div>";
		}
		?>
        <?
        if(isset($_POST['remove'])) {
            $idproduct = $_POST['id'];
            mysqli_query($mysqli,"DELETE  FROM `products` WHERE `id`= '$idproduct' ");
        }
        ?>
	</div>
	</div>
	</div>