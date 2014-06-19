<?php
include 'overall.php';
$allowed_referer = array("/register/passwd_chk"); //add the allowed sites in this array
$referal = $_SERVER['HTTP_REFERER'];
if (in_array($referal, $allowed_referer)){
	include 'newaccount.php';
	header("Location:index");
} else {
	header("Location: /register");
}
?>