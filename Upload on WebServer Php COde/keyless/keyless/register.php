<html>
<head>
	<title>Register</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
	<style type="text/css">
		body{
			background:url("images/bg6.jpg");
			background-size: cover;
		}
		.reg_form{
			background-color: #5d635f;
			background:rgba(0,0,0,0.5);
			margin-top: 40px;
			margin-left: 25%;
			margin-right: 25%;
			padding: 15px 15px 20px 20px;
			color: #fff;
			box-sizing: border-box;
		}
		.reg_form input[type="text"], .reg_form input[type="password"]
	   {
	   	border:none;
	   	border-bottom: 1px solid #fff;
	   	background: transparent;
	   	outline: none;
	   	height: 40px;
	   	color: #fff;
	   	font-size: 16px;
	   }
	   .btn{
	   	margin-left: 40%;
	   }
   .nav{
   	float: right;
   	margin-right: 40px;
   	font-size: 20px;
   	margin-top: 15px;
   }

	</style>
</head>

<body>
 <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
	<div class="nav"><a href="login.php">Home</a></div><br>

<?php
include("connection.php");

if(isset($_POST['submit'])) 
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$phone = $_POST['phone'];
	$door = $_POST['door'];
	$access = $_POST['access'];


	 if($user == "" || $pass == "" || $name == "" || $email == "" ) {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else { 
	
		mysqli_query($mysqli, "INSERT INTO login(name, email, username, password,phone,door,access) VALUES('$name', '$email', '$user', '$pass','$phone','$door','0')")
			or die("Could not execute the insert query.");
			
			
			
		echo '<script type="text/javascript">
              alert("Registration Successfully..");
               window.location="login.php"
              </script>';
	}
 } else { 
?>
	
	<form name="form1" method="post" action="register.php">
		<div class="reg_form">
			<h4 style="text-align: center;">Register Here</h4><br>
		
			<label>Full Name: </label>
				<input type="text" name="name" class="form-control" required>
			
				<label>Email :</label>
				<input type="text" name="email" class="form-control" required>
			
				<label>Username :</label>
				<input type="text" name="username" class="form-control" required>
			
			 
				<label>Password : </label>
				<input type="password" name="password" class="form-control" required>
			
				<label>Phone :</label>
				<input type="text" name="phone" class="form-control" required>
			
				<label>Door :</label>
				<input type="text" name="door" class="form-control" required>
			
	
				<input type="Hidden" name="access" class="form-control" required><br>
			
			 
				<td>&nbsp;</td>
				<input type="submit" name="submit" class="btn btn-success" value="Submit">
	
	</form></div>
<?php
}
?> 
</body>
</html>
