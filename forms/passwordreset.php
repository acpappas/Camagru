<?php
    include "../config/database.php";
    $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];

    //Checks whether email is already in use.
    $stmt = $dbh->prepare("SELECT * FROM `user` WHERE `email`=?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() < 1) {
        $_SESSION['error'] = "Email does not exist.";
        $_SESSION['passwordreset_success'] = FALSE;
        $stmt = null;
        return (0);
    }

    
    
?>