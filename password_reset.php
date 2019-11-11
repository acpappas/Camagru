<?php 
	session_start();
	include "templates/header.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Madimgz - Reset Password</title>
	<style>
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>

<body class="purp_body">
	<section class="hero is-fullheight">
		<div class="hero-body">
			<div class="container has-text-centered">
			<div class="section">
				<h1 class="title">Reset Password!</h1>
				<p>Fill in your new password below!</p>
			</div>
                <section class="section">
                    <div class="container has-text-centered">
                        <div class="columns is-centered">
                            <div class="column is-5 is-4-desktop">
                                <form method="post" action="forms/passwordreset.php">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="Password" name="password" placeholder="New Password" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <button class="button is-primary is-fullwidth" href="" type="Submit">Give me a new password!</button>
                                    </div>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
		</div>
	</section>
	<?php
	include "templates/footer.php";
?>
</body>

</html>