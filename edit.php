<?
session_start();
include('login.php');
include('cart.php');
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
      <body style="height:100vh;">
        <div class="header" >
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
	<p>Edit Board</p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td>LOGO </td>
				<td><input type="file" name="logo"></td>
			</tr>
			<tr> 
				<td>EDIT Clouthes</td>
				<td><input type="file" name="clouthes_img"></td>
			</tr>
			<tr> 
				<td>EDIT Shoes</td>
				<td><input type="file" name="shoes_img"></td>
			</tr>
			<tr> 
				<td>EDIT Accessory</td>
				<td><input type="file" name="accossory_img"></td>
			</tr>
			
				<td><input type="submit" name="submit" value="edit" class="submit"></td>
				<td><a href="cart.php" class="submit">CANCEL</a> <br /></td>
			</tr>
		</table>
		
	</form>
	
</div>

</body>
</html>