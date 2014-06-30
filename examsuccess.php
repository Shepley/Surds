<?php

$e1 = $_POST['e1'];
$e2 = $_POST['e2'];
$e3 = $_POST['e3'];

include '/register/database.php';
include 'overall.php';

$testscore = $_SESSION['testscore'];
$checkanswers = mysqli_query($db, "SELECT * FROM answers");

while ($row = mysqli_fetch_assoc($checkanswers)) {

	if($e1 == $row['e1']){
		$testscore = $testscore+1;
		$e1 = 1;
	}

	if($e2 == $row['e2']){
		$testscore = $testscore+1;
		$e2 = 1;
	}

	if($e3 == $row['e3']){
		$testscore = $testscore+1;
		$e3 = 1;
	}

}
$username = $_SESSION['username'];
$uploadanswers = mysqli_query($db, "UPDATE users SET testscore=".$testscore." WHERE username='".$username."'");

unset($_SESSION['testscore']);
?>

<div class="container">
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 100%">
    <span>Exam Completed</span>
  </div>
</div>

<div class="row">
	<div class="well">
		<h2>Well done! <small>You have completed the exam. Here are the marks:</small></h2><br><br><br>
			<div align="center">
			You got..<br><br>

				<h3><?php if($testscore == 0){
					echo '<font color="red">';
				} else {
					echo '<font color="green">';
				}?><?php echo $testscore ?></font></h3><small>out of..</small><h3>19</h3>
			</div>
		<br><br>
		<div class="pull-left"><button onclick="location.href = '/exam';" class="btn btn-warning">Retry?</button></div><div class="pull-right"><button onclick="location.href = '/index';" class="btn btn-info">Back to the homepage</button></div><br><br><div class="pull-right"><button onclick="location.href = '/leaderboards';" class="btn btn-info disabled">View the leaderboards</button></div><br>
		
	</div>
</div>

</div>