
<DOCTYPE! html>
<html>
<head>
	<title>Select Name</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
      <style type="text/css">
      	.select_form{
      		margin: 20% 25% 25% 32%;
      	    border: 2px solid #968987;
      	    padding: 15px 10px 5px 17px;

      	}
      	.heading{
      		color: #f2edf5;
      		margin-top: 10px;
      		margin-left: 15px;
      	}
  
      	body{
      		background: url("images/coffee.jpg");
      		background-size: cover;
      	}
      </style>
</head>
<body>
	 <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
	<div class="select_form">
<form action="user_view.php" method="post">
	<label>Enter Your ID :</label> <input type="text" name="id" class="form-control" required><br>
	<input type="submit"  class="btn btn-dark" value="SUBMIT" />
</form></div>
</body>
</html>