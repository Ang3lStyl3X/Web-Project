<?php
	session_start();
	include 'includes/comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chat4Security</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="stylesheet" type="text/css" href="style/comment.css">

	<!-- Clock -->
    <script>
		function startTime() {
		    var today = new Date();
		    var h = today.getHours();
		    var m = today.getMinutes();
		    var s = today.getSeconds();
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('clock').innerHTML =
		    h + ":" + m + ":" + s;
		    var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
		    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
	</script>

</head>

<body onload="startTime()">
	<!-- Header -->
	<div class="page-header">
		<div class="header-title">
			<h1>Chat4Security</h1>
		</div>
		<div class="header-description">
			<p>On this site you can chat with other people safely!</p>
		</div>
	</div>
	
	<!-- NavBar -->
	<div class="NavBar">
		    <a class="active" href="/index.php">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a class="right"><div id="clock"></div></a>
	</div>