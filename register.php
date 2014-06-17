<?php include 'overall.php'; ?>
<div class="container">
	<div class="row">
		<div class="align-center">
			<div class="well">
        <form class="form-horizontal" role="form" action="passwordcheck.php">
        <h4>Register an account</h4><br>
            <div class="form-group">
              <label for="inputUsername" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" placeholder="Enter your username">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <label for="repeatPassword" class="col-sm-2 control-label">Confirm your password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" id="confirm_password" placeholder="Repeat your password" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
             <label for="inputSchoolYear" class="col-sm-2 control-label">Your school year</label>
              <label class="checkbox-inline">
                <input type="checkbox" id="yr7" value="7"> 7
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="yr8" value="8"> 8
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="yr9" value="9"> 9
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="yr10" value="10"> 10
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="yr11_over" value="11over"> 11(+)
              </label>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Create account</button>
              </div>
            </div>
        </form>
			</div>
		</div>
	</div>
</div>