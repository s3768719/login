<?php require "header.php"; ?>

	<main class="container">
		<h1>HOME</h1>
		<?php 
		if (isset($_SESSION['userId'])){
			echo "<p>You are logged in!! YAY</p>";
		} else {
			echo "<p>You are logged out fool</p>";
		}
			
		?>
	</main>

<?php require "footer.php" ?>