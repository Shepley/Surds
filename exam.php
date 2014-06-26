<?php
include 'overall.php';

if($_SESSION['loggedIn']){
echo '<div class="container">
		<div class="well">
			<h3>Grade C/B</h3><small><strong>Simplify these surds</strong></small><br>
			<br><div class="row">
			<div class="col-md-2"><strong>1) When $a \ne 0$, there are two solutions to \(ax^2 + bx + c = 0\) and they are
$$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
		<br><div class="row">
			<div class="col-md-2"><strong>1) &radic; 50</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
		<br><div class="row">
			<div class="col-md-2"><strong>1) &radic; 50</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
		<br><div class="row">
			<div class="col-md-2"><strong>1) &radic; 50</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
		<br><div class="row">
			<div class="col-md-2"><strong>1) &radic; 50</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
		<br><div class="row">
			<div class="col-md-2"><strong>1) &radic; 50</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
		<br><div class="row">
			<div class="col-md-2"><strong>1) &radic; 50</strong></div>
  			<div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
  			<div class="col-md-3"><strong>2) &radic; 108</strong></div>
  			<div class="col-md-3"><input type="text" class="form-control" placeholder="Enter Answer" autocomplete="off"></div>
		</div>
	</div>
</div>';
} else {
echo '<div class="container">
	<div class="row">
		<div class="align-center">
			<div class="well"><h3 align="middle">You need to be signed in to take an exam!</h3><br>
				<form class="form-horizontal" method="post" action="loginaction.php">
  					<div class="form-group">
    					<label for="inputUsername" class="col-sm-2 control-label">Username</label>
    					<div class="col-sm-10">
      						<input type="text" class="form-control" name="username" placeholder="Enter your username">
    					</div>
  					</div>
  					<div class="form-group">
    					<label for="inputPassword" class="col-sm-2 control-label">Password</label>
    					<div class="col-sm-10">
      						<input type="password" class="form-control" name="password" placeholder="Password">
    					</div>
  					</div>
  					<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" class="btn btn-success">Sign in</button>
    					</div>
  					</div>
				</form>
			</div>
		</div>
	</div>
</div>';
}