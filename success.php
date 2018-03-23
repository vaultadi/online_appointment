   <?php 
   include('header.php');
   session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['pass'] && !empty($_SESSION['time']))) {
		 echo "Hi, ".$_SESSION['email'];
		 echo '<br>';
         echo "Welcome to our Page"; 
		 echo '<br><br>';
		 echo '<a href="LogOut.php" class="btn btn-info btn-lg"<span class="glyphicon glyphicon-log-out"></span> Log out</a>';
	} else {		
		header("Location: UserLogin.php");
	}
    include('footer.php');	
   ?>