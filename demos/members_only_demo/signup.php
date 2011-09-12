<?php
/* Start the session and check for access */
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>YourSite.Com Members Only Demo</title>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bevan' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
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

      <h2>Your Sign UP Form Goes Here</h2>
      <hr noshade="noshade" />
      <p>This is where you would put a signup form. Since your options <em>could</em> be for real time credit card processing, offline credit card processing, free memberships, free trials, etc., you can use any method you like. Just put it on this page. <strong>:)</strong></p>
      <hr noshade="noshade" />
      <p>This is also hidden from your members navigation. You can also place an "if/else switch" at the start of the script to redirect logged in members away from this page.</p>
      
      <hr noshade="noshade" />


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