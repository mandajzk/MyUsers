<?php


/* now for security's sake, you should store these outside of your but we will address that later for now just get connected to your db 
$hostname = "mysql50-105.wc2.dfw1.stabletransit.com";
$database = "581917_myusers_cp";
$username = "581917_demo";
$password = "Sf7394jt";

$hostname = "localhost";
$database = "myusers";
$username = "steve";
$password = "letmein";
*/


$hostname = "mysql50-105.wc2.dfw1.stabletransit.com";
$database = "581917_myusers_cp";
$username = "581917_demo";
$password = "Sf7394jt";

$link = mysql_pconnect("$hostname", "$username", "$password") or die ("Could not connect to MySQL");
mysql_select_db ("$database") or die ("Could not select database");

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit']) && $_POST['submit'] == "Submit") {
$check = mysql_query("SELECT * FROM users WHERE users.user_name='".$username."' AND users.user_pass='".$password."'") or die(mysql_error());
$check2 = mysql_num_rows($check);
    if ($check2 == "1") {
    	$row = mysql_fetch_assoc($check) or die(mysql_error());
    	session_start();
      $_SESSION['logged_in'] = true;
      $_SESSION['display_name'] = $row['user_dname'];
      $_SESSION['user_level'] = $row['user_level'];
      header('Location: dashboard.php');
      exit;
    } else {
      $errorMessage = "Error! Please try again.";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bevan" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.redhousewd.com/clearfield.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".btn-tan-normal").hover(
          function () {
            $(this).attr("class","btn-tan-hover");
          },
          function () {
            $(this).attr("class","btn-tan-normal");
          }
        );
      });
      
      $(document).ready(function() {
      	$('.clearField').clearField();
      });
    </script>
  </head>
  <body>
  	<div class="container_12">
  	  <div class="grid_6 prefix_3 suffix_3">
  	  	<div class="loginform">
  	  		<br>
  	  		<?php if (isset($errorMessage)) { echo "<div id=\"alert\" class=\"error\">".$errorMessage."</div>"; } ?>
  	  		<h1>Log In below:</h1>
  	  		<p>Hey there! To check the demo out, use the following login information:</p>
  	  		
  	  		<p>
  	  			<ul>
  	  				<li>For a standard level (0) user, use <strong>"user"</strong> as your username.</li>
  	  				<li>For a 2nd level user (1), use <strong>"manager"</strong> as your username.</li>
  	  				<li>For an admin level user (2), use <strong>"admin"</strong> as your username.</li>
  	  		  </ul>
  	  		</p>
  	  		<p>Use <strong>"password"</strong> as your password for all users above. Once you get logged in, please notice the user details on the top of the sidebar. Shows the displayed name and the user level.</p>
  	  		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="myForm">
  	  			<input type="hidden" name="login" value="process">
  	  			
  	  		<input type="text" name="username" value="Your Username" class="clearField text"><br>
  	  		<input type="password" name="password" value="password" class="clearField text"><br>
  	  		
  	  		<input type="submit" name="submit" value="Submit" class="btn-tan-normal">
  	  		</form>
  	  	</div>
  	  </div>
  	</div>
  </body>
</html>
