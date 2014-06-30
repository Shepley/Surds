<?php

$a_div_1 = $_POST['a_div_1'];
$a_div_2 = $_POST['a_div_2'];
$a_div_3 = $_POST['a_div_3'];
$a_div_4 = $_POST['a_div_4'];

$astar_addsub_1 = $_POST['astar_addsub_1'];
$astar_addsub_2 = $_POST['astar_addsub_2'];
$astar_addsub_3 = $_POST['astar_addsub_3'];
$astar_addsub_4 = $_POST['astar_addsub_4'];

include '/register/database.php';
include 'overall.php';

$username = $_SESSION['username'];
var_dump($_SESSION);
//$scorequery = mysqli_query($db, "SELECT testscore FROM users WHERE username='".$username."'");
//$testscore = $scorequery;
//var_dump($testscore);
$testscore = $_SESSION['testscore'];
$checkanswers = mysqli_query($db, "SELECT * FROM answers");

while ($row = mysqli_fetch_assoc($checkanswers)) {

	if($a_div_1 == $row['a_div_1']){
		$testscore = $testscore+1;
		$ad1 = 1;
	}

	if($a_div_2 == $row['a_div_2']){
		$testscore = $testscore+1;
		$ad2 = 1;
	}

	if($a_div_3 == $row['a_div_3']){
		$testscore = $testscore+1;
		$ad3 = 1;
	}

	if($astar_addsub_1 == $row['astar_addsub_1']){
		$testscore = $testscore+1;
		$asas1 = 1;
	}

	if($astar_addsub_2 == $row['astar_addsub_2']){
		$testscore = $testscore+1;
		$asas2 = 1;
	}

	if($astar_addsub_3 == $row['astar_addsub_3']){
		$testscore = $testscore+1;
		$asas3 = 1;
	}

	if($astar_addsub_4 == $row['astar_addsub_4']){
		$testscore = $testscore+1;
		$asas4 = 1;
	}

}

$_SESSION['testscore'] = $testscore;
var_dump($_SESSION);
header('Location: /exam&page=3');

?>