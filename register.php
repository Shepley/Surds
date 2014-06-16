<?php include 'overall.php'; ?>

<div class="container">
	<div class="row">
		<div class="align-center">
			<div class="well">
        <form class="form-horizontal" role="form">
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
                  <input type="password" class="form-control" id="Password" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="repeatPassword" class="col-sm-2 control-label">Confirm your password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" id="Passwordrepeat" placeholder="Repeat your password">
              </div>
            </div>
            <div class="form-group">
             <label for="inputSchoolYear" class="col-sm-2 control-label">Your school year</label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 7
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 8
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 9
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 10
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 11(+)
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