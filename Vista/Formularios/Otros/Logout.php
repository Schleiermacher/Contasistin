<?php


    session_start();
    session_unset();
    session_destroy();


    echo '<script >self.location = "Login.php";</script> ';
    exit();
?>