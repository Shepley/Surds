<?php
include 'overall.php';
include '/register/database.php';
error_reporting(E_ALL);
$username = $_POST['username'];
$password = md5($_POST['password']);

$query="SELECT * FROM users";
$result=mysqli_query($db,$query)
	or die("Error: ".mysqli_error($db));

while ($row = mysqli_fetch_array($result)){

    if ($username == $row['username'] && $password == $row['password']){
		$_SESSION['loggedIn'] = 1;
		$_SESSION['username'] = $row['username']; 
		header('Location: /index');
	} else {
		echo '<div class="container"><div class="alert alert-warning alert-danger">
  <strong>Error 401!</strong> The username or password you entered was incorrect, please try again.<button onClick="location.href=\'/login\'" class="close">Back to login</button>
</div></div>';
	}
}

?>