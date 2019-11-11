<?php

    function emailPasswordReset($email) {
        include "../config/database.php";
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh->prepare("SELECT `username` FROM `user` WHERE `email`=?");
        $stmt->execute([$email]);
        $results = $stmt->fetchAll();
        $username = $results['username'];

        $to = $email;
        $subject = 'Madimgz email verification';
        $message = '
        Welcome '.$username.'

        Please click on the link below to verify your account:
        http://localhost:8080/camagru/email_verification.php?email='.$email.'&token='.$_SESSION['token'].'';
        
        $headers = 'From: lady.xerena@gmail.com';

        mail($to, $subject, $message, $headers);
        return (0);

    }


?>