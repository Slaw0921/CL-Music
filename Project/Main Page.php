<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/mystyles.css" />
	<script type="text/javascript" src="js/myjs.js" /></script>

	<?php include ("dbconnection.php"); ?>

	<div class="App_image">
		<img src="Images/app_logo.jpg" style="width:350px;height:220px;" class="center">
	</a></div>	
	
	<head> 
		<title>CL-Music Main Page</title>
	</head>


	<body bgcolor="#FFFFFF">
		<br><br><br>
	
	<h1 align="center">CL-Music Main Page</h1>
	
	<div class="main-bar">
	<ul>
		<li class="menu-item"><a href="#" class="drp">Account</a>
			<div class="menu-content">
				<a  href="user_account.php">User Account</a><br>
			</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Search</a>
		<div class="menu-content">
			<a  href="Search.php">Go to Search</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Playlists</a>	
		<div class="menu-content">
			<a href="playlists.php">Go to Playlists</a><br>
		</div>
		</li>
	</ul>
	</div>
		<p align="center"><p>
		<center>
		</center>
	</body>
</html>
