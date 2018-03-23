<?php
include('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);


/**
 * Validating email & mobile number exist in User table
 */
$sql = "SELECT * from Users where mob_number='" . $_POST["mob_number"] ."' AND email='" . $_POST["email"] ."'";
if (mysqli_num_rows(mysqli_query($conn, $sql)) < 1) {
	
//	if (isset($_POST["mob_number"])&& $_POST["email"] ) {

			$query = "INSERT INTO Users (firstname, middlename, lastname, DOB, mob_number, email, pass1, pass2, blood_group, height, weight)
			VALUES ('" . $_POST["firstname"] . "','" . $_POST["middlename"] ."','" . $_POST["lastname"] ."','" . $_POST["DOB"] ."','" . $_POST["mob_number"] ."',	
					 '" . $_POST["email"] ."','" . md5($_POST["pass1"]) ."','" . md5($_POST["pass2"]) ."','" . $_POST["blood_group"] ."','" . $_POST["height"] ."',
					 '" . $_POST["weight"] ."')";


			if (mysqli_query($conn, $query) === TRUE) {
				//echo "New record created successfully";
				header("Location: welcome.php?uname=" . $_POST['firstname']."");
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
			}
//	} else {
		        header("Location: UserRegistration.php");
	} else {
				header("Location: UserLogin.php");
//	}
}