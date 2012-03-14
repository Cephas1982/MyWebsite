<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<?php include("php/Connect.php"); 
		  include("php/Updates.php"); 
	?>
	<?php $updateCounter = 2; ?>
	
	<script type="text/javascript" >
	function addUpdates(){
		var xmlhttp;
		//var counter;
		
		if(typeof counter == 'undefined')
			counter = 2;
		
		counter+= 2;

		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		  	//		document.write("aadfadfa");
		    document.getElementById("updates").innerHTML=xmlhttp.responseText;
		  }
		}
		xmlhttp.open("GET","php/ajaxTest.php?count=" + counter,true);
		xmlhttp.send();
	}
	</script>



	
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
		<a class="activenavitab" href="index.php">Home</a><span class="hide"> | </span>
		<a class="navitab" href="games/monopoly/index.php" target="_parent">Projects</a><span class="hide"> | </span>
		<a class="navitab" href="#">About Me</a><span class="hide"> | </span>
		<!-------------------------
		<a class="navitab" href="#">Fourth</a><span class="hide"> | </span>
		<a class="navitab" href="#">Fifth</a><span class="hide"> | </span>
		<a class="navitab" href="#">Sixth</a><span class="hide"> | </span>
		<a class="navitab" href="#">Seventh</a>
		!-------------------------->
	</div>
	
	<div id="desc">
		<h2>Welcome</h2>
		<p>I am a student working towards becoming a professional developer.</p>
		
		<!-----------------------
		<p class="right"><a href="#">Sample link</a> &raquo;</p>
		!------------------------>
	</div>

	<div id="main" class="auto-style1">
		<h2>Updates</h2>
		
		<div id="updates" class="auto-style1">
			<?php getUpdates($updateCounter);//updates are pulled from database	?>
		</div>
<!----------------------------------------------------------
		<p class="timestamp">March 1, 2012</p>
		<p> Fixed some routing issues!</p>
		<p class="update"> <img height="152" src="images/cheese.jpg" width="150" /></p>
		<p class="timestamp">Feburary 28, 2012</p>
		<p>Day1, this web template is up and running! However, my headache is 
		still in full effect...</p>
!---------------------------------------------------------->
		<div class="auto-style2">
			<input name="addComments1" type="button" onclick="addUpdates()" value="show more comments" />
		</div>
	</div>

	<div id="sidebar">
		<h3 class="auto-style1">My Links</h3>
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

</div>

	<?php 
	//disconnect from database
	include("php/disconnect.php");
	?>
</body>
</html>