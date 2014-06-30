<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index"><span class="glyphicon glyphicon-book">Surds</span></a>
    </div>

      <?php
        error_reporting(E_ALL);
        //var_dump($_SESSION);

        function curPageName() {
          return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
        }

      ?>

      <ul class="nav navbar-nav">
        <li<?php if(curPageName() == "learn.php"){
                  echo ' class="active "';
            }?>><a href="/learn">Learn about Surds</a></li>
        <li<?php if(curPageName() == "leaderboards.php"){
                  echo ' class="active disabled"';
            } else {
                  echo ' class="disabled "';
            }?>><a>Leaderboards</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if($_SESSION['loggedIn'] == 1){
     	  echo "<p class='navbar-text'>Signed in as ".$_SESSION['disp_name']."</p>
     	  <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown'> <span class='glyphicon glyphicon-user'></span> Account <b class='caret'></b></a>
          <ul class='dropdown-menu'>
            <li class='disabled'><a>username: ".$_SESSION['username']."</a></li>
            <li><a href='/signout'><span class='glyphicon glyphicon-log-out'></span> Sign out</a></li>
          </ul>
        </li>";
      } else {
        echo "<li><a href='/register'>Register</a></li>";
        echo "<li";
        include 'loginpagecheck.php';
        echo "><a href='/login'>Login</a></li>";
      }
       ?>
      </ul>
  </div>
</nav>