<?php 
	session_start();
	$_SESSION['errormsg'] = "";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Search result description">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<nav class="nav-header-main">
				<a class="header-logo" href="index.php">
					<img src="img/logo_200x200.png" alt="logo">
				</a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">About me</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="header-login">
					<?php
					if (!isset($_SESSION['userId'])) {
					echo '<form action="includes/login.inc.php" method="post">';
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "wrongpwd") {
							$uid = $_GET['uid'];
							echo '<input type="text" name="mailuid" value="'.$uid.'">';
							$_SESSION['errormsg'] = "*wrong password";
						} else {
							echo '<input type="text" name="mailuid" placeholder="Username/Email...">';
						}
					} else {
						echo '<input type="text" name="mailuid" placeholder="Username/Email...">';
					}
					echo '<input type="password" name="pwd" placeholder="Password">';
					echo '<button type="submit" name="login-submit">Login</button>';
					echo '</form>';
					echo '<a href="signup.php">Signup</a>';
					echo $_SESSION['errormsg'];
					} else {
					echo '<span>Welcome ' .$_SESSION['userUid'].'</span>';
					echo '<form action="includes/logout.inc.php" method="post">';
					echo '<button type="submit" name="logout-submit">Logout</button>';
					echo '</form>';
					}
					?>
				</div>
			</nav>
		</header>