<?php
include 'overall.php';
$_SESSION['loggedIn'] = 0;
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>