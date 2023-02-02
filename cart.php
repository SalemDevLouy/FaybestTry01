<?php
session_start();
// -----------------remove product from cart----------------
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<script>
        alert('Product is removed from cart');
        </script>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
		// Stop the loop after we've found the product
    }
}
  	
}
if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
}else{
    $cart_count = 0; 
}
?>
<html>
<head>
<title>Fy|cart</title>
<link rel='stylesheet' href='css/cartstyle.css' type='text/css' media='all' />
</head>
<body>
<div class="container">
        <div class="navBar">
            <div class="logo">
                <img src="images/logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="indexAc.php">HOME</a></li>
                    <li><a href="Allpro.php">ALL PRODUCTS</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <span><?php echo $cart_count; ?></span></a>
            
        </div>
        
    </div>
<div style="width:700px; margin:50 auto;">

<h2>FY|Shopping Cart</h2>   
<div class="cart_div">
<a href="cart.php">
</div>
<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<div class="small-container cart-page">
<table class="table">
<tbody>
<tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
</tr>
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td>
<div class="cart-info">
	<img src='<?php echo $product["image"]; ?>' width="50" height="40" />
	<div>
		<p><?php echo $product["name"]; ?></p>
		<small><?php echo "$".$product["price"]; ?></small><br>
		<form method='post' action=''>
        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
        <input type='hidden' name='action' value="remove" />
        <button type='submit' class='remove'>Remove Item</button>
        </form>
	</div>
</div>	
</td>
	<td>
	<form method='post' action=''>
	<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
	<input type='hidden' name='action' value="change" />
	<input type="text" name='quantity' class='quantity' onchange="this.form.submit()">
	</form>
	</td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
</td>
</tr>
</tbody>
</table>
<div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td><?php echo "$".$total_price; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="saleform.php" class="btn">BUY NOW</a></td>
                </tr>
            </table>
        </div>		
  <?php
      $_SESSION['total_price'] = $total_price; 
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>
</body>
</html>