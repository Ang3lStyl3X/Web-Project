<?php

session_start();

$error=''; //Variable to Store error message;

if (isset($_POST['submit'])) {
	include 'dbh.inc.php';

	//Define $user and $pass
 	$user = $_POST['user'];
 	$pass = $_POST['pass'];

 	// To protect from MySQL injection
 	$user = stripslashes($user);
 	$pass = stripslashes($pass);
 	$user = mysqli_real_escape_string($conn, $_POST['user']);
 	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
 	$pass = md5($pass);
    
 	//Error handlers
 	 //Check if inputs are empty
 	if (empty($user) || empty($pass)) {
 	    $error = "Fields cant be empty.";
		header("Location: ../index.php?login=emptyfields");
		exit();
 	} else {
 		$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
 		$resultCheck = mysqli_num_rows($query);
 		if ($resultCheck < 1) {
 		    $error = "Something wrong! Please try again.";
			header("Location: ../index.php?login=error");
			exit();
 		} else {
 			if ($row = mysqli_fetch_assoc($query)) {
 					//Login here
 					$_SESSION['user'] = $row['id'];
 					$_SESSION['user'] = $row['username'];
 					header("Location: ../index.php?login=success");
					exit();
 				}
 			}
 		}
} else {
    $error = "Something wrong! Please try again.";
	header("Location: ../index.php?login=error");
	exit();
}

?>