<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index"><span class="glyphicon glyphicon-book">Surds</span></a>
    </div>

      <?php
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
                  echo ' class="active "';
            }?>><a href="/leaderboards">Leaderboards</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if($_SESSION['loggedIn']){
     	  echo "<p class='navbar-text'>Signed in as ".$_SESSION['username']."</p>
     	  <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown'> <span class='glyphicon glyphicon-user'></span> Account <b class='caret'></b></a>
          <ul class='dropdown-menu'>
            <li><a href='/account/'><span class='glyphicon glyphicon-user'></span> My test scores</a></li>
            <li class='divider'></li>
            <li><a href='/signout'><span class='glyphicon glyphicon-log-out'></span> Sign out</a></li>
          </ul>
        </li>";
      } else {
        echo "<li";
        include 'loginpagecheck.php';
        echo "><a href='/login'>Login</a></li>";
      }
       ?>
      </ul>
  </div>
</nav>