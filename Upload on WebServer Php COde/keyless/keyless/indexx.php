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
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  //echo 'You have entered valid use name and password';
				  header('Location: view.php');
               }else {

                echo '<script type="text/javascript">
                alert("invalid Username or Password ");
                </script>';

               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container ">
         <div class="login_form">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">

            <h4 style="color: #121042">LOGIN</h4>
            
            <h6 style="color: #571e85">Username:</h6> <input type = "text" class = "form-control" 
               name = "username"></br>
            <h6 style="color: #571e85">Password:</h6> <input type = "password" class = "form-control"
               name = "password" placeholder = "" required /> </br>
            <button class = "btn btn-lg btn-success btn-block" type = "submit" name = "login">Login</button>
           
         </form>
			
         
         
      </div> 
   </div>
      
   </body>
</html>