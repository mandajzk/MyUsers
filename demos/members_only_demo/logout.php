<?php
/* Log Out Script */
/* start the session */
session_start();
/* switch for determining if you're still logged in and logs you out by unsetting the main var used for access status and destroying the session, just to be completely sure you're logged out */
if (isset($_SESSION['logged_in'])) {
   unset($_SESSION['logged_in']);
   session_destroy;
}
/* - Use this code to redirect your user to another page upon logout - */
header('Location: index.php');
?>