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

      <h2>I am your home page!</h2>
      <hr noshade="noshade" />
      <p>This is where you sell your service. You should also offer a link to <a href="signup.php">signup.php</a></p>
      
      <p>And to see your login cred working like it should, try to access the <a href="members.php">members area</a> and <a href="support.php">membership support</a>. If you are logged in you will see the following paragraph.</em></p>
      
      <p><em><strong>This paragraph is "members only content" and therefore you would need to log in to see it.</strong></em></p>
      
      <p>If you're NOT logged in, you would see this paragraph.</p>
      
      <p><em><strong>Please log in to see this content.</strong></em></p>
      <p>If you will notice the footer menu adds a link for logging out, once logged in.</p>
      <p>One final thing, please notice the navigation menu and how it changes depending on whether or not you're logged in.</p>
      
      <h5>More fake content...</h5>
      <hr noshade="noshade" />
           
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
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