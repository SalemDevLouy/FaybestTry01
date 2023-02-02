<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="CSS/login.css">
</head>

<body style="height:100vh;">
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$adress = $_POST['adress'];
	$pass = $_POST['password'];

	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO cust(name, email, username,adress, password) VALUES('$name', '$email', '$user','$adress', md5('$pass'))");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
	}
} else {
?>
<div class="form-log" style="width: 60%;">
	<p>SignUp</p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td><input type="text" name="name" placeholder="Full Name"></td>
				<td><input type="text" name="email" placeholder="Email"></td>
			</tr>			
			<tr> 
				<td></td>
				<td><input type="text" name="adress" placeholder="Adress"></td>
			</tr>
			<tr> 
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="submit" value="Submit" class="submit"></td>
				<td><a href="index.php" class="submit">Back</a> <br /></td>
			</tr>
		</table>
		
	</form>
	
</div>
<?php
}
?>
</body>
</html>
