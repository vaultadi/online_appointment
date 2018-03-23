<?php
  session_start();  
  include('header.php');
      if(!isset($_SESSION['email'])) {
?>
   <form action="SuccessfulLogin.php" method="post"> 
      <div class="user-login-center">
         <fieldset>
            <legend>User LogIn</legend>
            <label> E-mail:</label><br>   
            <input type="email" name="email" placeholder="jaywanttopno@yahoo.com" size="50" required autocomplete="off">
            <br><br>
            <label> Password:</label><br>
            <input type="password" name="pass1"  size="50" required autocomplete="off">	
            <br><br>			
         </fieldset>
		 <button input type="submit" class="btn btn-default">LogIn</button>
      </div>        
	 </form> 
<?php } else {
        header("Location: success.php");
      }
	  include('footer.php');
?>