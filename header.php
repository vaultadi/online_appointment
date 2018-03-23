<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>User Login Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
		 <a href="success.php">
            <img src="logo.png" alt="Dev Ops">
		 </a>
			<br>
			<ul class="horizontal_menu">
			  <li class="active"><a href="UserListing.php">Users</a></li>
			  <?php 
			  //echo '<pre>';
			  //print_r($_SESSION);
			  //echo '</pre>';
			  //die;
			  
			  
			  
			  
			  if(isset($_SESSION['email'])) {  ?>
			  <li class="active"><a href="LogOut.php">LogOut</a></li>
			  <?php } if(!isset($_SESSION['email'])) {  ?>
			  <li class="active"><a href="UserLogin.php">LogIn</a></li>
			  <?php } ?>
			</ul>
         </div>
      </nav>
	   <div class="container">
         <div class="row">