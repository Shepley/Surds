<?php

error_reporting(E_ALL);
include 'database.php';

  $username = $_POST['username'];
  $disp_name = $_POST['disp_name'];
  $password = md5($_POST['password']);
  $testscore = "n/a";

$disp_check = mysqli_query($db, "SELECT * FROM users WHERE disp_name = '". $disp_name ."'") or die ('Unable to run userquery:'.mysql_error());
$user_check = mysqli_query($db, "SELECT * FROM users WHERE username = '". $username ."'") or die ('Unable to run userquery:'.mysql_error());
var_dump($disp_check);
var_dump($user_check);

  if(mysqli_num_rows($disp_check) > 0){
    header('Location: /register/error&code=dispt');
  } elseif(mysqli_num_rows($user_check) > 0){
    header('Location: /register/error&code=usert');
  } else {
    if ($_POST["password"] == $_POST["confirm_password"]) {

	   mysqli_query($db, "INSERT INTO `users` (username, disp_name, password, testscore) VALUES ('". $username ."', '". $disp_name ."', '". $password ."', '". $testscore ."')");
      $_SESSION['loggedIn'] = 1;
      $_SESSION['username'] = $username;
      $_SESSION['disp_name'] = $disp_name;
      header( 'Location: /index');
    } else {
      header( 'Location: /register/error' );
    }
  }
?>