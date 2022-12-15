

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
//$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=".$_SESSION['id']." ORDER BY id DESC");
//$name1=$_POST['password'];
//$result = mysqli_query($mysqli, "SELECT * FROM login WHERE name='$name1'");

$name1=$_POST['id'];
echo $name1;
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$name1'");


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
	.nav{
		float: right;
		margin-right: 30px;
	}
      </style>
	
</head>

<body>
	 <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
	<div class="nav">
	<a href="login.php">Home</a> </div>
	<br/><br/>
	<div class="container table_content">
	<table class="table table-striped table-light">
  <thead>
    <tr class="bg-warning">
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Username</th>
      <th scope="col">Phone</th>
      <th scope="col">Door</th>
      <th scope="col">Access</th>
	  <th scope="col">Granted / Non- Granted</th>
	  
    </tr>
  </thead>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['username']."</td>";	
			
			echo "<td>".$res['phone']."</td>";	
			echo "<td>".$res['door']."</td>";	
			echo "<td>".$res['access']."</td>";	
			if ($res['access']=='1')
			{
			echo "<td><a href=\"valid.php?id=$res[id]\">Acess Granted</a> </td>";		
			}
			if ($res['access']=='0')
			{
			echo "<td><a href=\"invalid.php?id=$res[id]\">Not Yet Granted</a> </td>";
			}
		}
		?>
	</table>	</div>
	

</body>
</html>
