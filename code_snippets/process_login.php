<?php
/* start the session */
session_start();

/* now for security's sake, you should store these outside of your but we will address that later for now just get connected to your db */
$hostname = "localhost";
$database = "test";
$username = "root";
$password = "1973";

$link = mysql_pconnect("$hostname", "$username", "$password") or die ("Could not connect to MySQL");
mysql_select_db ("$database") or die ("Could not select database");

/* check if the user id and password combination is correct */
if (isset($_POST['username']) && isset($_POST['password'])) {
	$check = mysql_query("SELECT * FROM users WHERE user_name = '$_POST['username']' AND user_pass = '$_POST['password']'") or die(mysql_error());
	$check2 = mysql_num_rows($check);
	
	$row = mysql_fetch_array($result) or die(mysql_error());
	  
	  if ($check2=="1") {
    /* if the user id and password match and returns true, set the needed session vars */
    $_SESSION['logged_in'] = true;
    $_SESSION['displayed_name'] = $row['user_dname'];
    $_SESSION['user_level'] = $row['user_level'];
    
    /* after login we can redirect them back to from where they came (thanks NY) */
    header('Location: ".$_POST['referrer']."');
    exit;
    } else {
    	/* the user id and password match, let them know */
    	$errorMessage = 'Error! Please try again.';
    }
}
?>