<?php include("php/Session.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<?php include("php/Connect.php"); 
		  include("php/Updates.php"); 
		  include("php/Achievements.php");
	?>
	<?php $updateCounter = 2; ?>
	
	<script type="text/javascript" src="jscript/jquery.js"></script>
	<script type="text/javascript" src="jscript/jquery.cookie.js"></script>
	

	<script type="text/javascript" src="jscript/init.js"></script>
	<script type="text/javascript" src="jscript/login.js"></script>
	<script type="text/javascript" src="jscript/naviTabs.js"></script>
	<script type="text/javascript" src="jscript/mainUpdates.js"></script>
	<script type="text/javascript" src="jscript/achievements.js"></script>
	<script type="text/javascript" src="jscript/mainTemplateLooks.js"></script>	
	


	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="About Lee Cephas. Programming, hobbies" />
	<meta name="keywords" content="programming, hobbies, c++, php, sql" />
	<meta name="author" content="Your Name" />
	<link rel="stylesheet" type="text/css" href="CSS/andreas02.css" media="screen,projection" />
	<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print" />
	<title>Lee Cephas</title>
	
	<style type="text/css">
	</style>
	
	<link href="css/mainPage_template.css" rel="stylesheet" type="text/css">
	
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

	<div id="user_bar_div" class="user_status_bar_div">
		<div id ="loginTab" class="statusBar_tab_div">login/logout</div>
		<div id="userBarTab2" class="statusBar_tab_div">account</div>
		<div id="userBarTab3" class="statusBar_tab_div">contact me</div>
		<div id="userBarTab4" class="statusBar_tab_div">post msg</div>	
	</div>
	
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
		
		<a id ="loginTab" class="navitab" href="#">Log in</a><span class="hide"> | </span>		
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
	


	<div id="main" class="left-align">
			


	<?php include("html/updateContent.html");
		  include("html/projectsContent.html");
		  include("html/aboutMeContent.html");
	?>


	</div>

	<div id="sidebar">
		<h3 class="left-align">Links</h3>
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
		<p>page views <?php echo $_SESSION['views']?></p>
	</div>
	
	
	
	<div id="achievement" class="achievement">
	<?php
	//post achievement here	
	//echo "Achievement Unlocked!" . "1/" . $achievement_count['MAXCOUNT'] . "<br />";	
	//echo $achievement_result['DESCRIP'];
	?>
	</div>

	

</div>
	<div id="loginForm_div" class="loginForm_div">
		<form id="loginForm" method="" action="">
			<p id="loginError_p" style="text-align: center">Invalid username or password</p>
			
			<div id="username_div" class="login_and_reg_divs">
				<lable id="username">Username:</lable><input name="username" id="username" type="text" maxlength="20" class="registerField" /> 
				<img id="username_x" src="images/red-x_small.png" alt="X" class="loginStatusPic"/>
			</div>
			
			<div id="password_div" class="login_and_reg_divs">
				<lable id="password">Password:</lable><input name="password" id="password" type="password" maxlength="20" class="registerField" />
				<img id="password_x" src="images/red-x_small.png" alt="X" class="loginStatusPic"/>
			</div>
			
			<div id="confirmPassword_div" class="login_and_reg_divs">
				<lable id="confirmPassword">Confirm Password:</lable><input name="confirmPassword" id="confirmPassword" type="password" maxlength="30" class="registerField" />
				<img id="confirmPassword_x" src="images/red-x_small.png" alt="X" class="loginStatusPic"/>
			</div>
			
			<div id="email_div" class="login_and_reg_divs">
				<lable id="email">Email:</lable><input name="email" id="email" type="text" maxlength="30" class="registerField" />
				<img id="email_x" src="images/red-x_small.png" alt="X" class="loginStatusPic"/>
			</div>
			
			<div id="confirmEmail_div" class="login_and_reg_divs">
				<lable id="confirmEmail">Confirm Email:</lable><input name="confirmEmail" id="confirmEmail" type="text" maxlength="20" class="registerField" />
				<img id="confirmEmail_x" src="images/red-x_small.png" alt="X" class="loginStatusPic"/>
			</div>

			<div id="buttons_div">
				<div id="loginButton_div" class="login_and_reg_divs"><button type="submit" id="loginButton" name="loginButton" class="loginButtons">login</button></div>
				<div id="submitButton_div" class="login_and_reg_divs"><button type="submit" id="submitButton" name="submitButton" class="loginButtons">submit</button></div>		
				<div id="registerButton_div" class="login_and_reg_divs"><button type="submit" id="registerButton" name="registerButton" class="loginButtons">register</button></div>
			</div>
		</form>
	</div>
	
	
	
	<div id="backgroundPopup"></div>
	<div id="login_success_div" class="loginSuccess">Thank you!</div>

	<?php 
	//disconnect from database
	include("php/disconnect.php");
	?>
</body>
</html>