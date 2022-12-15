<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
      <style type="text/css">
      	.welcome_text{
      		color: #fff;
      		margin-left: 42%;
      		margin-top: 5%;
      		font-size: 25px;
      	}
      	#btns{
      		margin-left: 42%;
      	}
      </style>

</head>

<body>
	<div id="header">
		 <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT id,name FROM login");
	?>
				
		<div class="welcome_text">Welcome <?php echo $_SESSION['name'] ?>!   @id: <?php echo $_SESSION['id'] ?></div>
		<br/>
		<button type="button" class="btn btn-light" id="btns"><a href='selectname.php'>Click Here to Access door</a></button>
		<button type="button" class="btn btn-light"><a href='main.php'>LOGOUT</a></button>
	<?php	
	} else {
		echo "<p class='msg'>You must be logged in to view this page.</p>";
		echo "<button type='button' class='btn btn-light' id='btns'><a href='login.php'>LOGIN</a></button>";
		echo "<button type='button' class='btn btn-light'><a href='register.php'>REGISTER</a></button>";
		
	}
	?>
	
</body>
</html>
