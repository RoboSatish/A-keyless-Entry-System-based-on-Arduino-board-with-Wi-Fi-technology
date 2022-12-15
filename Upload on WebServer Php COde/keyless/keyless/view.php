<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: index.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
//$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=".$_SESSION['id']." ORDER BY id DESC");
$result = mysqli_query($mysqli, "SELECT * FROM login");
?>

<html>
<head>
	<title>Homepage</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
<style type="text/css">
	body{
		
       background-image: url("images/bg3.jpg");
       background-size: cover;
	
	}
	.table_content{
		padding-top: 3px;
	}
</style>

</head>

<body>

	<br>
	<div class="container">
		
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
 
    </ul>
    
  </div>
  <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
</nav></div>
	<div class="container table_content">
	<table class="table table-striped table-dark">
  <thead>
    <tr class="bg-warning">
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Username</th>
      <th scope="col">Phone</th>
      <th scope="col">Door</th>
      <th scope="col">Access</th>
      <th scope="col">More Options</th>
    </tr>
  </thead>
	
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr >";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['username']."</td>";	
			
			echo "<td>".$res['phone']."</td>";	
			echo "<td>".$res['door']."</td>";	
			echo "<td>".$res['access']."</td>";	
			$s1= $res['access'];
			
		
			
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		
			
			
		?> 
		
	</table></div>	
	 <input type="button" class = "btn btn-lg btn-success btn-block" onclick="window.location.href = 'index.php';" value="Go TO Home"/>
</body>
</html>
