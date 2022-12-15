<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pass = $_POST['password'];	
	$phone = $_POST['phone'];
	$door = $_POST['door'];
	$access = $_POST['access'];
	
	// checking empty fields
/* 	if(empty($name) || empty($email) || empty($door)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($door)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	 */
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE login SET name='$name', email='$email', username='$username', password='$pass', phone='$phone', door='$door', access='$access' WHERE id=$id ");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	//}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	//$name = $_POST['name'];
/*	$email = $_POST['email'];
	$username = $_POST['username'];
	$pass = $_POST['password'];	
	$phone = $_POST['phone'];
	$door = $_POST['door'];
	$access = $_POST['access']; 
	
	//$s1=$_POST['name']; */
	
	$name=$res["name"];
	$email=$res["email"];
	$username=$res["username"];
	$pass=$res["password"];
	$phone=$res["phone"];
	$door=$res["door"];
	$access=$res["access"];
	

	
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 

      <style type="text/css">
      	body{
      		background-image: url("images/bg4.jpg");
      		background-size: cover;
      	}
      	.edit_data{
      		margin-left: 23%;
      		margin-right: 23%;
      		margin-top: 5%;
      	}
      	.edit_data label{
      		color:#fff;
      	}
      	.edit_heading{
      		margin-top: 3%;
      	}
      </style>
</head>

<body>
	
	<div class="container">
	  <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
	<div class="edit_heading"><h3 style="color: #3bde12;text-align: center;"><u><b>Edit</b></u></h3></div>
		<div class="edit_data">
	<form name="form1" method="post" action="edit.php">
		     
			 
				
				<label>Name: </label><input type="text" name="name" value="<?php echo $name;?>" class="form-control">
			
		
				<label>Email: </label><input type="text" name="email" value="<?php echo $email;?>" class="form-control">
			
			<label>Username: </label><input type="text" name="username" value="<?php echo $username;?>" class="form-control">
			
				
				<input type="hidden" name="password" value="<?php echo $pass;?>">
		
			
			
				<label>Phone: </label>
				<input type="text" name="phone" value="<?php echo $phone;?>" class="form-control">
			
		     <label>Door : </label>
				<input type="text" name="door" value="<?php echo $door;?>" class="form-control">
			
				<label> Access :</label>
				<input type="text" name="access" value="<?php echo $access;?>" class="form-control"><br>
			
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form></div>
	</div>
</body>
</html>
