<?php
include('header.php');
?>
	  <div class="user-login-center">
<?php
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

$sql4 = "SELECT email from Users where pass1='" . md5($_POST["pass1"]) ."' AND email='" . $_POST["email"] ."'";
	if (mysqli_num_rows(mysqli_query($conn,$sql4)) >= 1)  {

	
	/*insert into session table*/
	
    $query = "INSERT INTO Session (email, pass1)VALUES ('" . $_POST["email"] ."','" . md5($_POST["pass1"]) ."')";
	  if (mysqli_query($conn, $query) === TRUE) {
			//echo "New record created successfully";
		
	  } else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
	  }	
	
	session_start();

	$_SESSION['email'] = $_POST["email"];
	$_SESSION['pass']  = md5($_POST["pass1"]);
	$_SESSION['time']  = time();
	
	header("Location: success.php"); 
    } else {
		//echo ("Error:" . mysqli_error($conn));
		//echo ("Sessio:" . mysqli_error($conn));
	    //echo ("Users error " . mysqli_error($conn));
		header("Location: UserLogin.php");
    }
	include('footer.php'); 
?>



 