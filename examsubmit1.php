<?php

$c_simp_1 = $_POST['c_simp_1'];
$c_simp_2 = $_POST['c_simp_2'];
$c_simp_3 = $_POST['c_simp_3'];
$c_simp_4 = $_POST['c_simp_4'];

$b_mult_1 = $_POST['b_mult_1'];
$b_mult_2 = $_POST['b_mult_2'];
$b_mult_3 = $_POST['b_mult_3'];
$b_mult_4 = $_POST['b_mult_4'];

$testscore = 0;
$_SESSION['testscore'] = 0;

include '/register/database.php';
include 'overall.php';

$checkanswers = mysqli_query($db, "SELECT * FROM answers") or die("Error: ".mysqli_error($db));

while($row = mysqli_fetch_assoc($checkanswers)) {

	if($c_simp_1 == $row['c_simp_1']){
		$testscore = $testscore+1;
		$cs1 = 1;
	}

	if($c_simp_2 == $row['c_simp_2']){
		$testscore = $testscore+1;
		$cs2 = 1;
	}

	if($c_simp_3 == $row['c_simp_3']){
		$testscore = $testscore+1;
		$cs3 = 1;
	}

	if($c_simp_4 == $row['c_simp_4']){
		$testscore = $testscore+1;
		$cs4 = 1;
	}

	if($b_mult_1 == $row['b_mult_1']){
		$testscore = $testscore+1;
		$bm1 = 1;
	}

	if($b_mult_2 == $row['b_mult_2']){
		$testscore = $testscore+1;
		$bm2 = 1;
	}

	if($b_mult_3 == $row['b_mult_3']){
		$testscore = $testscore+1;
		$bm3 = 1;
	}

	if($b_mult_4 == $row['b_mult_4']){
		$testscore = $testscore+1;
		$bm4 = 1;
	}

}
//$uploadanswers = mysqli_query($db, "INSERT INTO `users` WHERE username='".$username."' (testscore) VALUES ('". $testscore ."')");
$_SESSION['testscore'] = $testscore;
header('Location: /exam&page=2');

?>