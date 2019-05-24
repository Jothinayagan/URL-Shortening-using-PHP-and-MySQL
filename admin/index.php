<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Admin</title>
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
	</head>

<body>
            <?php
	            error_reporting(0);
				session_start();
				$username= $_SESSION["user_name"];
				include '../db.php';
				$type=$_SESSION["type"];

				if( $type!=1)
				{
    				header("Location:../index.php");
				}
				$msg=$_GET["msg"];
			?>

			<div class="container">
				<div class="menu-wrap">
					<nav class="menu-top">
						<div class="profile"><img src="img/final.png" alt=""/><span>  </span></div>
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
					<div class="content">
						<header class="codrops-header">
							<div class="codrops-links">
					            <div style="position: absolute; top: 3%; right: 7%; width: 100px; text-align:right;">
									<h2>HII!!<h2>
  								</div>
                        	</div>
						
							<?php
								include 'dropdown.php'
							?>
							<br><br><br><br><br>
							<nav class="codrops-demos">
								<a href="viewusers.php">View Users</a>
								<a href="viewurls.php">View Urls</a>						 
                        	</nav>
						</header>
						<br><br><br><br><br>
					<!-- Related demos -->
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /container -->

		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
