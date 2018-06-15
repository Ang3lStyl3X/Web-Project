<?php
session_start();

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {

 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "id6105539_root", "12321", "id6105539_login") or die("Error". mysqli_error($conn));

 //Define $user and $pass
 $user = $_POST['user'];
 $pass = $_POST['pass'];

 // To protect from MySQL injection
 $user = stripslashes($user);
 $pass = stripslashes($pass);
 $user = mysqli_real_escape_string($conn, $_POST['user']);
 $pass = mysqli_real_escape_string($conn, $_POST['pass']);
 $pass = md5($pass);
 
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'") or die (mysqli_error());
 $rows = mysqli_num_rows($query);
 
$_SESSION['user'] = $user;
     
 if($rows == 1){
    header("Location: ../app.php"); // Redirecting to other page
 }
 else
 {
 $error = "Something wrong! Please try again.";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>