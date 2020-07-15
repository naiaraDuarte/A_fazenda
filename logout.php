<?php
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    session_destroy();
    header('Location: index.php');
?>