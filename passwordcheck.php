<?php
echo $_POST["username"];
echo $_POST["password"];
echo $_POST["confirm_password"];
echo $_POST["yr7"];
echo $_POST["yr8"];
echo $_POST["yr9"];
echo $_POST["yr10"];
echo $_POST["yr11"];
echo $_POST["h_edu"];
echo '<br>success';

if ($_POST["password"] == $_POST["confirm_password"]) {
   //header( 'Location: /success' );
} else {
   header( 'Location: /register/error' );
}

?>