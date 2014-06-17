<?php

if ($_POST["password"] == $_POST["confirm_password"]) {
   header( 'Location: /success' );
} else {
   echo '<div class="alert alert-danger">Both passwords were not the same, please try again.</div>';
}

?>