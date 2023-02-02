 <?php session_start(); ?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="CSS/login.css">
</head>

<body style="height:100vh;">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM cust WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: indexAc.php');			
		}
	}
} else {

}
?>
<div class="form-log" style="width: 40%;">
	<p class="login">Login</p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr> 
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="submit" value="Submit" class="submit" placeholder=""></td>
				<td><a href="index.php" class="submit">Back</a></td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>
