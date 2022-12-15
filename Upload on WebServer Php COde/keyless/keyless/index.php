<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>KeyLess</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url('images/bg1.jpg');
            background-size: cover;

         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
      
         
         h2{
            text-align: center;
            color: #017572;
         }
         .login_form{
            background: rgba(199, 192, 187, 0.5);
            padding: 40px 35px 10px 10px;
            margin-left: 15%;
            margin-right: 15%;
           }
      </style>
      
   </head>
	
   <body>
      
      <h2 style="color: #f5f6f7" align="center"><b>A keyless Entry System based on Arduino board with Wi-Fi technology</b></h2> 
      <div class = "container form-signin">
         
       
      </div> <!-- /container -->
      
      <div class = "container ">
         <div class="login_form">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">

        
          <input type="button" class = "btn btn-lg btn-success btn-block" onclick="window.location.href = 'indexx.php';" value="Admin Login"/>
		  <input type="button" class = "btn btn-lg btn-warning btn-block" onclick="window.location.href = 'login.php';" value="User Login"/>
           
         </form>
			
         
         
      </div> 
   </div>
      
   </body>
</html>