<?php

// Error codes

switch ($_SESSION['status']){

case 'badPswdOrUsr':
  echo '<div class="alert alert-danger navbar-form navbar-left">
      <strong>Nope!</strong> The password or username you have entered is wrong!
      </div>';
  break;
case 'dbNotConn':
  echo "The connecntion to the database is not working properly, check the service!";
  break;
case '404':
  echo "The file has not been found. Error 404!";
  break;
case 'blin':
  echo "Boris";
  break;

}

 ?>
