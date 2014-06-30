<?php
include 'overall.php';

if($_SESSION['loggedIn']){
include 'examhtml2.php';
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