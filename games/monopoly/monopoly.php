<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Monopoly</title>
<link href="css/monopolyCSS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	font-family: Century;
	float: left;
	width: 560px;
	height: 580px;
	background-color: #FFFFCC;
}
.auto-style2 {
	width: 1200px;
	background-color: #FFFFCC;
	height: 748px;
}
.auto-style3 {
	float: left;
	width: 618px;
	height: 535px;
}
.auto-style4 {
	height: 100%;
	text-align: center;
	background-color: #FFCC99;
}
.auto-style5 {
	width: 100%;
	text-align: center;
}
</style>
</head>

<body>
<div id="status" style="background-color: #CCFFCC; " class="auto-style5">
	Version 0.001 -- <a href="#">change log</a>
</div>

<div id="mainBody" class="auto-style2">

	<div id="boardView" style="height: 580px; width: 640px; background-color: #FFFFCC;" class="auto-style3">
	<?php include("includes/board_layout.php"); ?>
	</div>
	
	<div id="playerView" class="auto-style1">
	<p>Player info here</p>
	
	<?php
	//for each player create a div and grab data from sever
	//check if player exists and if they do:
		echo "Player1 name  |  Money | -put view property button here-" . "<br />";
		echo "Player2 name  |  Money | -put view property button here-" . "<br />";
		echo "Player3 name  |  Money | -put view property button here-" . "<br />";
		echo "Player4 name  |  Money | -put view property button here-" . "<br />";//TODO loop these						
	
	?>
	</div>
	
	
	<div id="footer" class="auto-style4">
		footer here - TODO: stream stuff here~ twitter/news/IMclient?/music?</div>
	
	
</div>

</body>

</html>
