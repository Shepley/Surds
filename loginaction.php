<?php
include 'overall.php';
include '/register/database.php';
error_reporting(E_ALL);
$username = $_POST['username'];
$password = md5($_POST['password']);
$ref = $_SERVER["HTTP_REFERER"];

$dispquery = mysqli_query($db, "SELECT * FROM users WHERE username='".$username."'");
while($row = mysqli_fetch_array($dispquery)){
	$_SESSION['disp_name'] = $row['dispname'];
}

$query= mysqli_query($db, "SELECT * FROM users WHERE username = '".$username."'") or die("Error: ".mysqli_error($db));

if($query->num_rows) {

	while ($row = mysqli_fetch_array($query)){

	    if ($username == $row['username'] && $password == $row['password']){
			$_SESSION['loggedIn'] = 1;
			$_SESSION['username'] = $row['username'];
			$_SESSION['disp_name'] = $row['disp_name'];

				if($ref == "http://localhost/exam"){
				header('Location: /exam');
				} else {
				header('Location: /index');
		    	}
		} else {
			header('Location: /login&error');
		}
	}
} else {
		header('Location: /login&error');
}



?>