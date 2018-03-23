<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Logout Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   
   <body>  
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
            <img src="logo.png" alt="Dev Ops">
         </div>
      </nav>
	  
      <div class="container">
         <div class="row">
             <?php
			      include('Connection.php');
                  $conn = mysqli_connect($dbhost, $username, $password, $dbname);
					session_start();
					
					//echo '<pre>';
					//print_r($_SESSION);				
					//echo '</pre>';
					//die;
					

	   $query = "DELETE FROM Session WHERE email = '" . $_SESSION["email"] ."'";
	   if (mysqli_query($conn, $query) === TRUE) {
			//echo "New record created successfully";
	     } else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
	  }					
					
					
					// remove all session variables
					if(isset($_SESSION["email"])){
						unset($_SESSION["email"]);
					}

					if(isset($_SESSION["pass"])){
						unset($_SESSION["pass"]);
					}


					if(isset($_SESSION["time"])){
						unset($_SESSION["time"]);
					}

//      $query = "INSERT INTO Users (email, pass1)VALUES ('" . $_POST["email"] ."','" . md5($_POST["pass1"]) ."')";
	  
					
					
					
					if(empty($_SESSION['email']) && empty($_SESSION['pass']) && empty($_SESSION['time'])) {
					  // echo "You'll be redirect to login page shortly..."; 
					   header( "refresh:2;url=/OnlineMgmt/UserLogin.php" );
					}	
					session_destroy();
					
					
					
					
			 ?>
         </div>
      </div>
   </body>
</html>

<?php



