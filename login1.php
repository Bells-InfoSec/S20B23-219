<?php
require_once('connection.php');
// session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit']))
{
        // removes backslashes
												$username = stripslashes($_REQUEST['username']);
											        //escapes special characters in a string
												$username = mysqli_real_escape_string($con,$username);
												$password = stripslashes($_REQUEST['password']);
												$password = mysqli_real_escape_string($con,$password);
												//Checking is user existing in the database or not
												$pass= md5($password);
											        $query = "SELECT * FROM admin WHERE username='$username'
											and password='$pass' limit 1";
												$result = mysqli_query($con,$query);
											//	$rows = mysqli_num_rows($result);
											        if($result){
												    $_SESSION['username'] = $username;
											            // Redirect user to admin.php
												    header("Location: admin.php");
											         }else{
												echo "<div class='form'>
											<h3>Username/password is incorrect.</h3>
											<br/>Click here to <a href='admin.php'>Login</a></div>";
												}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

</head>
<body >

	<div class="top">
		<div>
		 Contact:+256 312 350 800 /880. Email us: info@ucu.ac.ug
		</div>
	</div>

	<div class="logo" >
	<div>
		<table>
	<tr>
		<td width="600px" style="font-size:50px;font-family:forte; "> <font color="#428bca"> IEEE</font><font color="#000">.</font> </td>
		<td> <br> <br>
			<font size="4px">
				<a href="home.php">HOME</a>
				<a href="registration.php">REGISTER</a>
				<a href="speakers.php">SPEAKERS</a>
				<a href="contact.php">CONTACT US</a>
				<a href="login1.php">ADMIN</a>
			</font>
		</td>
			</tr>
		</table>
	</div>
	</div><br><br>


<div class="bb" style="padding-left:450px;">
	<div method="POST" class="log1" style="margin-left:100px; border: 1px solid;width: 300px; text-align:center">
	<h1>Log In</h1><br>
	<form action="" method="post" name="login">
		<input type="varchar" name="password" placeholder="usernam" required /><br><br>
		<input type="password" name="password" placeholder="Password" required /><br><br>
		<input name="submit" type="submit" value="Login" />

	</form><br>

	</div>

</div>

</body>
</html>
