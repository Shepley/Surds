<?php
include 'overall.php';

if($_SESSION['loggedIn']){
echo '<div class="container">
	<div class="row">
		<div class="well">loggedin</div>
	</div>
</div>';
} else {
echo '<div class="container">
	<div class="row">
		<div class="well">notlg</div>
	</div>
</div>';
}