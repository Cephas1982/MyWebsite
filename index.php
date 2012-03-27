<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<?php include("php/Connect.php"); 
		  include("php/Updates.php"); 
		  include("php/Achievements.php");
	?>
	<?php $updateCounter = 2; ?>
	
	<script type="text/javascript" src="jscript/jquery.js"></script>

	<script type="text/javascript" src="jscript/init.js"></script>
	<script type="text/javascript" src="jscript/naviTabs.js"></script>
	<script type="text/javascript" src="jscript/mainUpdates.js"></script>
	<script type="text/javascript" src="jscript/achievements.js"></script>



	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="About Lee Cephas. Programming, hobbies" />
	<meta name="keywords" content="programming, hobbies, c++, php, sql" />
	<meta name="author" content="Your Name" />
	<link rel="stylesheet" type="text/css" href="CSS/andreas02.css" media="screen,projection" />
	<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print" />
	<title>Lee Cephas</title>
	
</head>

<body>

<!-------------------------------------------------------------------------------
<div id="toptabs">
	<p>Sample top menu:
	<a class="activetoptab" href="index.html">Active tab</a><span class="hide"> | </span>
	<a class="toptab" href="#">Second</a><span class="hide"> | </span>
	<a class="toptab" href="#">Third</a><span class="hide"> | </span>
	<a class="toptab" href="#">Fourth</a></p>
</div>
!------------------------------------------------------------------------------->
<div id="container">
	<div id="logo">
		<h1><a href="index.php">Lee Cephas</a></h1>
		<p>student/developer</p>
	</div>

	<div id="navitabs">
		<h2 class="hide">Sample navigation menu:</h2>
		<a id ="homeTab" class="activenavitab" href="index.php">Home</a><span class="hide"> | </span>
		<a id ="projectsTab" class="navitab" href="games/monopoly/index.php" target="_parent">Projects</a><span class="hide"> | </span>
		<a id ="aboutMeTab" class="navitab" href="#">About Me</a><span class="hide"> | </span>
		<!-------------------------
		<a class="navitab" href="#">Fourth</a><span class="hide"> | </span>
		<a class="navitab" href="#">Fifth</a><span class="hide"> | </span>
		<a class="navitab" href="#">Sixth</a><span class="hide"> | </span>
		<a class="navitab" href="#">Seventh</a>
		!-------------------------->
	</div>
	
	<div id="desc">
		<h2>Welcome</h2>
		<p>Will code for food!</p>
		
		<!-----------------------
		<p class="right"><a href="#">Sample link</a> &raquo;</p>
		!------------------------>
	</div>
	


	<div id="main" class="auto-style1">
			


	<?php include("html/updateContent.html");
		  include("html/projectsContent.html");
		  include("html/aboutMeContent.html");
	?>


	</div>

	<div id="sidebar">
		<h3 class="auto-style1">Links</h3>
		<ul class="sidelink">
			<li><a href="http://www.facebook.com/lee.cephas/">Facebook</a></li>
			<li><a href="http://www.youtube.com/user/cephas1892">Youtube channel</a></li>
			<li><a href="http://www.github.com/cephas1982">Github</a></li>
		</ul>

		<!------------------------------------------ 
		<h3>Sample image:</h3>
		<img class="photo" src="images/test.jpg" height="100" width="130" alt="" />

		<h3>Sample links:</h3>
		<ul>
			<li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a></li>
		</ul>
		!------------------------------------------->
	</div>
    
	<div id="footer">
		<p><strong>© 2012 <a href="#">Lee Cephas</a></strong> | <a href="#">Admin</a></p>
	</div>
	
	
	
	<div id="achievement" class="achievement">
	<?php
	//post achievement here	
	echo "Achievement Unlocked!" . "1/" . $achievement_count['MAXCOUNT'] . "<br />";	
	echo $achievement_result['DESCRIP'];
	?>
	</div>

</div>

	<?php 
	//disconnect from database
	include("php/disconnect.php");
	?>
</body>
</html>