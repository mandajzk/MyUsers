<?php

/* Start the session and check for access */
session_start();
if (!isset($_SESSION['logged_in'])
    || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>YourSite.Com Control Panel</title>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bevan' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
  </head>
  <body>
  	<div class="container_12">
  	
  	<div class="grid_4"><h1 class="logoblock">YourSite.com</h1><h2 class="tagline">Administrative Control Panel</h2></div>
  	<div class="grid_8">
  		<div class="fright">
  		<ul class="nav">
  			<li class="nav"><a href="dashboard.php" class="nav">Dashboard</a></li>
  			<li class="nav"><a href="manage_pages.php" class="nav">Manage Pages</a></li>
  			<li class="nav"><a href="manage_blog.php" class="nav">Manage Blog</a></li>
  			<?php if (isset($_SESSION['user_level'])&& $_SESSION['user_level'] == "2") { echo "<li class=\"nav\"><a href=\"manage_users.php\" class=\"nav\">Manage Users</a></li>"; } ?>
  			<li class="nav"><a href="logout.php" class="nav">Log Out</a></li>
  		</ul>
  		</div>
  		  	
  	</div>
  	<div class="clearfix"></div>
  	
  	<div class="grid_12 sepborder"></div>
  	<div class="clearfix"></div>
  	<br>
  	<div class="grid_8">

      <h2>Manage Your Pages</h2>
      <hr noshade="noshade" />
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
            
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
      <h5>Sub-Title Goes Here...</h5>
      <hr noshade="noshade" />
           
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio. <a href="#">More...</a></p>
      
      <hr noshade="noshade" />


  	</div>
  	<div class="grid_4">
  		<h2 class="sidebar">User Stuff</h2>
  		<p><strong>Hi <?php echo $_SESSION['display_name']; ?>, you have an access level of <?php echo $_SESSION['user_level']; ?></p>
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
  	<div class="grid_6"><p class="copyright right"><a href="dashboard.php" class="copyright">Dashboard</a> | <a href="logout.php" class="copyright">Logout</a></p></div>
  	<div class="clearfix"></div>
  	
  </body>
</html>