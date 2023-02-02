
<?php
session_start();
include("connection.php");

if(isset($_POST['Add-pro'])) {
	$name = $_POST['name'];
	$code = $_POST['code'];
	$price = $_POST['price'];
	$codecat = $_POST['codecat'];
	$Fproduct = $_POST['Fproduct'];
	//upload image 
	
	$uploadimage = $_FILES["uploadimage"]["name"];
    $tmp = $_FILES["uploadimage"]["tmp_name"];
    $folder = "product-images/".$uploadimage;
    move_uploaded_file($tmp, $folder);
	echo "<img src= ".$folder." >" ; 
	//************************************* */
	
		mysqli_query($mysqli, "INSERT INTO products (name,code,price,image,codecate,Fproduct) VALUES ('$name','$code','$price','$folder','$codecat','$Fproduct')");			

		echo "<a href='adminpage.php'>Go to Admin Page</a>";
	
}
if(isset($_POST['remove'])) {
	$id = $_POST['id'];
		mysqli_query($mysqli, "DELETE FROM `products` WHERE `id` = $id");			
		echo "Add Product successfully";
		echo "<br/>";
		echo "<a href='adminpage.php'>Go to Admin Page</a>";
	
} 
?>
	<html>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FYBAST Shop</title>
        <link rel="stylesheet" href="CSS/addpro.css" />
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
                  <li><a href="sap.php">SHOW ALL PRODUCTS</a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
                </ul>
              </nav>
            </div>
            </div>
            </div>
<div class="form-log">
	<p>Add Products</p>
	<form name="form1" method="post" action="" enctype="multipart/form-data">
		<table width="75%" border="0">
			<tr> 
				<td><input type="text" name="name" placeholder="Product name" required></td>
				<td><input type="text" name="code" placeholder="Code" required></td>
			</tr>
		
			<tr> 
				<td><input type="text" name="price" placeholder="Price" required></td>
				<td><input type="text" name="codecat" placeholder="Shoes or Clouthes or Accessory" required></td>
			</tr>
			<tr> 
				<td><input type="text" name="Fproduct" placeholder="Fatured product 1 for true" required></td>
				<td><input type="file" name="uploadimage"  required></td>
			</tr>
			<tr> 
				<td><input type="submit" name="Add-pro" class="submit"></td>
				<td><a href="addpro.php" class="submit">Back</a> <br /></td>
			</tr>
		</table>
		
	</form>
	
</div>
<div class="form-log">
	<p>remove Products</p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td><input type="text" placeholder="Product ID" name ='id'></td>
				<td><input type="submit" name="remove" placeholder="Code" class="submit" value="Remove "></td>
			</tr>
		</table>
		
	</form>
	
</div>

</body>
</html>
