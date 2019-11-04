<?php
include "templates/header.php";
include "forms/sign_out.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Out</title>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<link rel="stylesheet" href="../css/debug.css">
	<style>
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>

<body class="purp_body">
    <div></div>
    <?php
    if (signout())
        echo "<span class=center style='height: 100'>You have successfully signed out.</span>";
    else
        echo "asdf";
    ?>
</body>

</html>