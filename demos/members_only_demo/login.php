<?php
/* Start the session and check for access */
session_start();

/* now for security's sake, you should store these outside of your root dir but we will address that later for now just get connected to your db */
$hostname = "localhost";
$database = "DB_Name";
$username = "DB_Username";
$password = "DB_Password";

$link = mysql_pconnect("$hostname", "$username", "$password") or die ("Could not connect to MySQL");
mysql_select_db ("$database") or die ("Could not select database");

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit']) && $_POST['submit'] == "Submit") {
$check = mysql_query("SELECT * FROM users WHERE users.user_name='".$username."' AND users.user_pass='".$password."'") or die(mysql_error());
$check2 = mysql_num_rows($check);
    if ($check2 == "1") {
    	$row = mysql_fetch_assoc($check) or die(mysql_error());
      $_SESSION['logged_in'] = true;
      $_SESSION['display_name'] = $row['user_dname'];
      $_SESSION['user_level'] = $row['user_level'];
      header('Location: members.php');
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
    <title>YourSite.Com Members Only Demo</title>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bevan' rel='stylesheet' type='text/css'>
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
  	
  	<div class="grid_4"><h1 class="logoblock">YourSite.com</h1><h2 class="tagline">Members Only Site Framework</h2></div>
  	<div class="grid_8">
  		<div class="fright">
  		<ul class="nav">
  			<li class="nav"><a href="index.php" class="nav">Home</a></li>
  			<?php if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in'] == "true") {
  				       echo "<li class=\"nav\"><a href=\"members.php\" class=\"nav\">Members Area</a></li>";
  				       echo "<li class=\"nav\"><a href=\"support.php\" class=\"nav\">Members Support</a></li>";
  				     } else {
  				     	 echo "<li class=\"nav\"><a href=\"service.php\" class=\"nav\">What you get!</a></li>";
  			         echo "<li class=\"nav\"><a href=\"signup.php\" class=\"nav\">Sign Up</a></li>";
  			         echo "<li class=\"nav\"><a href=\"login.php\" class=\"nav\">Log In</a></li>";
  		  } ?>
  			<li class="nav"><a href="contact.php" class="nav">Contact Us</a></li>
  			<?php if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in'] == "true") { echo "<li class=\"nav\"><a href=\"logout.php\" class=\"nav\">Log Out</a></li>"; } ?>
  		</ul>
  		</div>
  		  	
  	</div>
  	<div class="clearfix"></div>
  	
  	<div class="grid_12 sepborder"></div>
  	<div class="clearfix"></div>
  	<br>
  	<div class="grid_8">

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
  	  		<p>One last thing to notice is that the "Manage Users" nav item is <strong>only available for admin level users</strong>.</p>
  	  		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="myForm">
  	  			<input type="hidden" name="login" value="process">
  	  			
  	  		<input type="text" name="username" value="Your Username" class="clearField text"><br>
  	  		<input type="password" name="password" value="password" class="clearField text"><br>
  	  		
  	  		<input type="submit" name="submit" value="Submit" class="btn-tan-normal">
  	  		</form>
  	  </div>


  	</div>
  	<div class="grid_4">
  		<h2 class="sidebar">User Stuff</h2>
  		<?php if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in'] == "true") {
  			echo "<p><strong>Hi ".$_SESSION['display_name'].", you have an access level of ".$_SESSION['user_level']."</p>";
  		}	else {
  			echo "<p>Please log in to see your user details!</p>";
  		}	?>
  		  		
  		<h2 class="sidebar">Other Stuff</h2>
  		<p><strong>Aenean  sagittis.</strong> Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
  		<h2 class="sidebar">More Stuff</h2>
  		<p><strong>Aenean  sagittis.</strong> Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
  		<p><strong>Aenean  sagittis.</strong> Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
  		<p><strong>Aenean  sagittis.</strong> Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
  		<h2 class="sidebar">Even More Stuff</h2>
  		<p><strong>Aenean  sagittis.</strong> Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
  		<p><strong>Aenean  sagittis.</strong> Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
  	</div>
  	<div class="clearfix"></div>
  	
  	<div class="grid_12 sepborder"></div>
  	<div class="clearfix"></div>
  	
  	<div class="grid_6"><p class="copyright left">Copyright &#169; 2011 YourSite.com</p></div>
  	<div class="grid_6"><p class="copyright right"><a href="index.php" class="copyright">Home</a> | <a href="#" class="copyright">Terms of Use</a> | <a href="#" class="copyright">Privacy Policy</a> | <a href="#" class="copyright">Contact Us</a><?php if (isset($_SESSION['logged_in'])&& $_SESSION['logged_in'] == "true") {	echo " | <a href=\"logout.php\" class=\"copyright\">Logout</a>"; }	?></p></div>
  	<div class="clearfix"></div>
  	
  </body>
</html>