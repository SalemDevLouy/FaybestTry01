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
        <div class="header">
          <div class="container">
            <div class="navBar">
              <div class="logo">
                <img src="images/logo.png" width="125px" />
              </div>
              <nav>
                <ul id="MenuItems">
                  <li><a href="indexAc.php">HOME</a></li>
                  <li><a href="Allpro.php">ALL PRODUCTS</a></li>
                  <li><a href="#">ABOUT US</a></li>
                  <li><a href="logout.php">LOGOUT</a></li>
                </ul>
              </nav>
            </div>
            </div>
            </div>
<div class="form-log">
	<p>Thanks for choosing us</p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td><input type="text" name="fname" placeholder="firstname" required></td>
				<td><input type="text" name="lname" placeholder="lastname" required></td>
			</tr>
		
			<tr> 
				<td colspan="2"><input type="text" name="Adress" placeholder="Adress for Delivery" required></td>
				<td></td>
			</tr>
            <tr>
                <td><hr></td>
                <td><hr></td>
            </tr>
            <tr>
                <td colspan="2" text-align="center"><h2>Cart d'or information</h2></td>
                <td></td>
            </tr>
			<tr> 
                <td><input type="text" name="cartnum" placeholder="XXXX-XXXX-XXXX-XXXX" required></td>
				<td><input type="text" name="dateFcart" placeholder="YYYY/MM/DD" required></td>
			</tr>
			<tr> 
				<td><input type="submit" name="submit" value="BUY" class="submit"></td>
				<td><a href="cart.php" class="submit">CANCEL</a> <br /></td>
			</tr>
		</table>
		
	</form>
	
</div>

</body>
</html>