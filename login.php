<?php include 'overall.php'; ?>

<div class="container">
	<div class="row">
		<div class="align-center">
			<div class="well">
				<form class="form-horizontal" role="form">
  					<div class="form-group">
    					<label for="inputUsername" class="col-sm-2 control-label">Username</label>
    					<div class="col-sm-10">
      						<input type="text" class="form-control" id="username" placeholder="Enter your username">
    					</div>
  					</div>
  					<div class="form-group">
    					<label for="inputPassword" class="col-sm-2 control-label">Password</label>
    					<div class="col-sm-10">
      						<input type="password" class="form-control" id="Password" placeholder="Password">
    					</div>
  					</div>
  					<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" class="btn btn-success">Sign in</button>
    					</div>
  					</div>
				</form>
				<div class="pull-right"><button onclick="location.href = '/register';" class="btn btn-warning">Or create an account</button></div><br>
			</div>
		</div>
	</div>
</div>