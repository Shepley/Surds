<?php include 'overall.php'; ?>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="align-center">
			<div class="well">
        <form class="form-horizontal" method="post" action="passwd_chk.php">
        <h4>Register an account</h4><br>
            <div class="form-group">
              <label for="inputUsername" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputDispname" class="col-sm-2 control-label">Display name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="disp_name" placeholder="Enter your displayname; this is the one people see." required>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label for="confirm_password" class="col-sm-2 control-label">Confirm your password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" name="confirm_password" placeholder="Repeat your password" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-success" value="Register account"></input>
              </div>
            </div>
        </form><button onClick="location.href='/index'" class="btn btn-info pull-right">Cancel to homepage</button>
			</div>
		</div>
	</div>
</div>