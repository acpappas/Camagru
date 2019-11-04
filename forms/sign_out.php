<?php
    function signout() {
        $_SESSION['username'] = NULL;
        session_destroy();
        return (1);
    }
?>