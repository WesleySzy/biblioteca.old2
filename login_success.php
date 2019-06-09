<?php  
 //login_success.php  
 session_start();  
?>
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Menu - Login com PDO Session</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>
	  
	  <body>
	  
	  <div class="navbar navbar-inverse navbar-static-top" style="background: black; color: white; text-align: center;"></div>
	  
	  <div class="container" style="margin-top: 20px">
	  <?php
	  if(isset($_SESSION["username"])){  
      echo '<h3>Login Success, Bem Vindo - '.$_SESSION["username"].'</h3>';    
      echo '<br /><br /><a href="logout.php" class="btn btn-danger">Logout</a>';  
	  }  
	  else {  
      header("location:pdo_login.php");
	  }
	  
	  ?>	  
	  </div>
	  
