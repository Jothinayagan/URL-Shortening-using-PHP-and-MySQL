<?php
session_start();
$username= $_SESSION["user_name"];
include '../config.php';
$type=$_SESSION["type"];
$na=$_SESSION["uname"];
if($type!=2)
{
    header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>User</title>
		<meta name="description" content="Modern effects and styles for off-canvas navigation with CSS transitions and SVG animations using Snap.svg" />
		<meta name="keywords" content="sidebar, off-canvas, menu, navigation, effect, inspiration, css transition, SVG, morphing, animation" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_topside.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script type="text/javascript"href="js/jquery-1.10.2.js"></script>
		<script type="text/javascript"href="js/jquery-ui.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<style>
input[type="text"] {
    border: 3px solid white;
    width: 1000px; 
    font-size: 20px;
    margin: center;
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}

input[type="submit"] {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 15px 25px 15px 25px;
  text-decoration: none;
}

input[type="submit"]:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>


</head>

<body>
        <div class="container">
			<div class="menu-wrap">
				<nav class="menu-top">
					<div class="icon-list">
						
					</div>
				</nav>
				<nav class="menu-side">
                    <?php
                    require_once 'sidebar.php';
                    ?>
				</nav>
			</div>
		
			<button class="menu-button" id="open-button">Open Menu</button>
			<div class="content-wrap">
				<div class="content"><br><br><br><br><br><br><br>
					<header class="codrops-header">
						<div class="codrops-links">
						    <div style="position: absolute; top: 1%; right: 10%; width: 100px; text-align:right;">
						    <h2>HII!!<?php echo $username?><h2>
  							</div>                    
						</div>
						<nav class="codrops-demos">
	                    	<form method="post" action="addurl.php">
					    		<input type="text" name="url" value="" placeholder="Paste a URL to Shorten it">
					    		<input type="submit" value="SHORTEN">
	   				    	</form>
						</nav><br><br><br><br><br><br><br><br><br>
					</header>
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /container -->
		
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	
	</body>
</html>
