<?php
echo $_POST["username"];
echo "<br>";
echo $_POST["password"];
echo ":";
echo $_POST["confirm_password"];

if ($_POST["password"] == $_POST["confirm_password"]) {
	echo '<br>ifsuccess';
    include 'database.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$testscore = "n/a";

	mysqli_query($db,"INSERT INTO `users` (username, password, testscore) VALUES ('$username', '$password', '$testscore')");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
   $_SESSION['loggedIn'] = 1;
   header( 'Location: /success');
} else {
   header( 'Location: /register/error' );
}

?>