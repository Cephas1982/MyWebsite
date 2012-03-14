<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<script type="text/javascript" src="..\..\..\jscript\jquery.js"></script>
<script type="text/javascript" src="jscript/movement.js"></script>


<title>Monopoly</title>
<link href="css/monopolyCSS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.playerView {
	overflow: auto;
	font-family: Century;
	float: left;
	width: 50%;
	height: 580px;
	background-color: #FFFFCC;
	position: fixed;
	right: 0px;
}
.mainContainer {
	width: 100%;
	background-color: #FFFFCC;
	float: none;
	position: absolute;
	clear: none;
}
.boardView {
	overflow: visible;
	float: left;
	width: 50%;
	height: 580px;
	z-index: 0;
}
.footer {
	text-align: center;
	background-color: #FFCC99;
	float: none;
	clear: both;
}
.header {
	width: 100%;
	text-align: center;	
}
.player1 {
	position: absolute;
	top: 10px;
	z-index: 2;
	visibility: visible;
	left: 0px;
}
.playerInfo {
	overflow: auto;
	float: left;
}
</style>
</head>

<body>
<div id="status" class="header">
	Version 0.002 -- <a href="log.txt" target="_blank">change log</a>
</div>

<div id="mainBody" class="mainContainer">
	<div id="boardView" class="boardView">
		<img  id="player1" alt="ryu" class="player1" height="224" src="images/ryu.png" width="118" /><?php include("includes/board_layout.php"); ?></div>
	
	<div id="playerView" class="playerView">
		
		<div id="playerInfo" class="playerInfo">
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

	</div>
	
	
	<div id="footer" class="footer">
		Movement is working. Click the board.</div>
	
	
</div>

</body>

</html>
