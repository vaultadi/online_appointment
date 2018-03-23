<?php
		   
		   include('Connection.php');
		   include('header.php');
           $conn = mysqli_connect($dbhost, $username, $password, $dbname);
		   session_start();
		   
			 if(isset($_SESSION['email']) && !empty($_SESSION['pass'] && !empty($_SESSION['time']))) {
			
            $sql5 = "SELECT * from Users";
            $val= mysqli_query($conn,$sql5) or die(mysql_error());
            
			echo "<table style='width:100%'><tr><th>Firstname</th><th>Lastname</th><th>Age</th></tr>";
			while($row = mysqli_fetch_assoc($val)){
                 echo "<tr><td>". $row['firstname'] ."</td><td>". $row['lastname'] ."</td><td>". $row['DOB'] ."</td><td>";
		    }
			echo "</td><td></table>";
		  } else {		
			header("Location: UserLogin.php");
		}		
		
           include('footer.php');  
?>