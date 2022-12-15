<?php session_start(); ?>
<html>
<head>
	<title>Login</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
	<style type="text/css">
	   body{
	   	background:url("images/puzzle.jpg");
	   	background-size: cover;
	   	font-family: sans-serif;

	   }
	   .loginBox{
	   	position: absolute;
	   	top: 50%;
	   	left: 50%;
	   	transform: translate(-50%,-50%);
	   	width: 350px;
	   	height: 420px;
	   	padding: 80px 40px;
	   	box-sizing: border-box;
	   	background:rgba(0,0,0,0.5);
	   	color: #fff;
	   }
	   .loginBox input[type="text"], .loginBox input[type="password"]
	   {
	   	border:none;
	   	border-bottom: 1px solid #fff;
	   	background: transparent;
	   	outline: none;
	   	height: 40px;
	   	color: #fff;
	   	font-size: 16px;
	   }
	   .nav_login{
	   	margin-top: 10px;
	   	float: right;
	   	margin-right: 28px;
	   	font-size: 18px;
	   	
	   }
	</style>
</head>

<body>
 <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
	<div class="nav_login">
		<a href="login.php">Home</a> |
<a href="register.php">Register</a><br/>
</div>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
	//$access = mysqli_real_escape_string($mysqli, $_POST['access']);

	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		//$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password='$pass'")
		//			or die("Could not execute the select query.");
					
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username= '$user' AND password= '$pass' ")
					or die("Could not execute the select query.");
					
					
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo '<script type="text/javascript">
              alert("Invalid Username or Password ");
               window.location="login.php"
              </script>';
		}

		if(isset($_SESSION['valid'])) {
			header('Location: main.php');			
			echo '$row[id]';
		}
	}
} else {
?>
	<div class="loginBox">
		<h3 style="text-align: center;">Log In Here</h3><br>
	<form name="form1" method="post" action="login.php">
		
			
			Username:
			<input type="text" name="username" class="form-control" required>
			Password:
			<input type="password" name="password" class="form-control" required><br>
		    <td>&nbsp;</td>
			<input type="submit" name="submit" value="Submit" class="btn btn-danger">
			
		
		
	</form></div>
<?php
}
?>
</body>
</html>
