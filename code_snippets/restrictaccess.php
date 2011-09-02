/* Restrictions */

/* Restricted Page Access - include at the top of your page */
<?php
session_start();

if (!isset($_SESSION['logged_in'])
    || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>

/* Restricted Content Access - include "session_start()" at the top of your page */
<?php session_start(); ?>

/* Paste this into the area you want to restrict and echo it out(ex. #1) or don't mingle your php(ex. #2)!  */

/* Example #1 - the "echo" method - preferred for smaller content blocks (like admin only links or messages) */

<?php

if (!isset($_SESSION['logged_in'])
    || $_SESSION['logged_in'] !== true) {
    echo "<p>you cant see my stuff. <a href=\"login.php\">Click here to log in to see my stuff</a>.</p>";
   } else {
   	echo "<p>Now you can see my stuff!<br /><a href=\"logout.php\">logout here</a>.</p>";
   	}
?>


/* Example #2 - the "don't mingle" method - preferred for larger content blocks  */

<?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { ?>
	
	<p>you cant see my stuff. <a href=\"login.php\">Click here to log in to see my stuff</a>.</p>
	
<?php } else { ?>
	
	<p>Now you can see lots my stuff!<br /><a href=\"logout.php\">logout here</a>.</p>
	
<?php } ?>