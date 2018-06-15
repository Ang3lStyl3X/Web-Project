<?php

function setComment($conn) {
	if (isset($_POST['commentSubmit'])) {
		$user = $_POST['username'];
		$date = $_POST['date'];
		$message = mysqli_real_escape_string($conn, $_POST['message']);

		$query = mysqli_query($conn, "INSERT INTO comments (date, message, username) 
		VALUES ('$date', '$message', '$user')");
        
	}
}

function getComment($conn) {
	$query = mysqli_query($conn, "SELECT * FROM comments");
	while ($row = mysqli_fetch_assoc($query)) {
		echo "<div class='output'><p>";
		echo $row['username']."<br>";
		echo $row['date']."<br><br>";
		echo nl2br($row['message']);
		echo "</p></div>";
	}
}

?>