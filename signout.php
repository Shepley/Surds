<?php
include 'overall.php';
$_SESSION['loggedIn'] = 0;
unset($_SESSION['username']);
unset($_SESSION['disp_name']);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>