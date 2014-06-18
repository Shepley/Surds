<?php include 'database.php';

$name = $_POST['username'];
$password = md5($_POST['password']);
$testscore = "n/a";

mysqli_query($db,"INSERT INTO `users` (username, password, testscore) VALUES ('$name', '$password', '$testscore')");

?>