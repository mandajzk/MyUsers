<?php
/* Log Out Script */
session_start();

if (isset($_SESSION['logged_in'])) {
   unset($_SESSION['logged_in']);
   session_destroy;
}

/*  - Use this code to redirect your user to another page upon logout - 
    - Could be a logged out message page or a login page if need be   - 

header('Location: login.php');

*/
?>