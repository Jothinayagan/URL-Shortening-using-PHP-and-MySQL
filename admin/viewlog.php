

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
           
                <style>
#text
{
float:none;
width:200px;
height:30px;
}
#textbox
{
    width:200px;
    height: 37px;
    text-transform: uppercase;
}

/*CSS for dropdown box*/
select
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #CCC;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}
select:hover
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #CCC;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}
select.input-group-lg>.form-control,
select.input-group-lg>.input-group-addon,
select.input-group-lg>.input-group-btn>.btn {
    height: 46px;
    line-height: 46px
}

select[multiple].input-group-lg>.form-control,
select[multiple].input-group-lg>.input-group-addon,
select[multiple].input-group-lg>.input-group-btn>.btn,
textarea.input-group-lg>.form-control,
textarea.input-group-lg>.input-group-addon,
textarea.input-group-lg>.input-group-btn>.btn {
    height: auto
}

select[multiple],
select[size] {
    height: auto
}

select.input-sm {
    height: 30px;
    line-height: 30px
}

select[multiple].input-sm,
textarea.input-sm {
    height: auto
}
/*CSS for input textbox and password*/





/*input type for submit button*/

input[type='submit']
{
width: 150px;
height: 34px;
border: 2px solid white;
background-color:#CCC;
}
input[type='submit']:hover
{
width: 150px;
height: 34px;
border: 2px solid white;
background-color:#000000;
color:#fff;
}
input[type='reset']
{
width: 150px;
height: 34px;
border: 2px solid white;
background-color:#CCC;
}
input[type='reset']:hover
{
width: 150px;
height: 34px;
border: 2px solid white;
background-color:#000000;
color:#fff;
}
input[type='text'], input[type='password']
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #CCC;
padding: 8px;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}

input[type='text']:hover, input[type='password']:hover
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #aaa;
padding: 8px;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}

.table2 {
	margin:0px;padding:0px;
	width:55%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.table2 table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.table2 tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.table2 table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.table2 table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.table2 tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.table2 tr:hover td{
	background-color:#ffffff;
		

}
.table2 td{
	vertical-align:middle;
	
	background-color:#e5e5e5;

	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:center;
	padding:7px;
	font-size:12px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.table2 tr:last-child td{
	border-width:0px 1px 0px 0px;
}.table2 tr td:last-child{
	border-width:0px 0px 1px 0px;
}.table2 tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.table2 tr:first-child td{
		background:-o-linear-gradient(bottom, #4c4c4c 5%, #000000 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4c4c4c), color-stop(1, #000000) );
	background:-moz-linear-gradient( center top, #4c4c4c 5%, #000000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4c4c4c", endColorstr="#000000");	background: -o-linear-gradient(top,#4c4c4c,000000);

	background-color:#4c4c4c;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.table2 tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #4c4c4c 5%, #000000 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4c4c4c), color-stop(1, #000000) );
	background:-moz-linear-gradient( center top, #4c4c4c 5%, #000000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4c4c4c", endColorstr="#000000");	background: -o-linear-gradient(top,#4c4c4c,000000);

	background-color:#4c4c4c;
}
.table2 tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.table2 tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}





	</style>
   <script>  

</script> 

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
				
						<nav class="codrops-demos">
				

			 <div class="table2"><table>
<tr><td>User Name</td><td>Last Login</td><td>Status</td><td>Ip address</td></tr>			 
				
				
				<?php
				$query=mysql_connect("localhost","root","");
mysql_select_db("finalproj",$query);	
				 $query1=mysql_query("select * from tbl_log");
                                                   while($query2=mysql_fetch_array($query1))
												   {?>
											   <tr><td>	<?php echo $query2['username']; ?></td><td>	<?php echo $query2['lastlogin']; ?></td><td>	<?php echo $query2['status']; ?></td>
											<td>	<?php echo $query2['ip']; ?></td>
											   </tr>
											   
											   <?php
													   
													   
												   }  
												   ?>
				
				
				
				</table>
				</div>



											 
                                                </nav>
						
					</header>
					<!-- Related demos -->
                                    		<section class="related">
					
					</section>
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
