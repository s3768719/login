<?php require "header.php"; ?>

	<main class="container">
		<h1>Signup</h1>
		<?php 
		if (isset($_GET['signup'])) {
			if ($_GET['signup'] == "success") {
				echo '<p class="signsuccess">Signup Success</p>';
			}
		}
		?>
		<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyfields") {
				echo '<p class="signerror">*You are missing some fields</p>';
			}else if ($_GET['error'] == "invalidmail") {
				echo '<p class="signerror">*Invalid email format</p>';
			}else if ($_GET['error'] == "invaliduid") {
				echo '<p class="signerror">*Invalid username format</p>';
			}else if ($_GET['error'] == "passwordcheck") {
				echo '<p class="signerror">*Password didn\'t match</p>';
			}
		}
		?>
		<form class="signup-form" action="includes/signup.inc.php" method="post">
			<?php
			if (isset($_GET['uid'])) {
				$uid = $_GET['uid'];
				echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
			} else {
				echo '<input type="text" name="uid" placeholder="Username">';
				
			}
			if (isset($_GET['mail'])) {
				$mail = $_GET['mail'];
				echo '<input type="text" name="mail" placeholder="Email" value="'.$mail.'">';
			}else {
				echo '<input type="text" name="mail" placeholder="Email">';
				
			}
			?>
			
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Confirm Password">
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</main>

<?php require "footer.php" ?>