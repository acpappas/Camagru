<?php
session_start();
include "templates/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Profile</title>
</head>

<body class="purp_body">

	<section class="hero is-fullheight">
		<div class="hero-body">
			<div class="container">
				<?php
				// ini_set("display_errors", 1);
				include "functions/getUserDetails.php";
				$_SESSION['URI'] = $_SERVER['REQUEST_URI'];
				echo getUserProfile();
				?>
				<div class='box'><img src="$user['picturesource']" alt='error' class='image is-128x128'><p><?php echo $user['username']?>.'s Profile</p><br>Contact Details: <?php echo $user['email']?></div><br>
				<img src="$image['source']" alt='tongue_face' style='max-height: 100px; max-width:100px;'>
				<form action='functions/deleteImage.php' method='post'>
					<button type='submit' class='button purp_body padding_top padding_bot' value='Submit'><strong>Delete</strong></button>
					<input type='hidden' value="$image['imageid']" name='imageid'></input>
				</form>;
				<section class="section column"><div class="container">
				<?php
				echo getUserImages();
				?>
			</div>
	</section>
	</div>
	</div>
	</section>

</body>

</html>