<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html, charset=utf-8, target-densitydpi=device-dpi, width=device-width, height=device-height" http-equiv="Content-Type" name="viewport" />

<script type="text/javascript" src="..\..\..\jscript\jquery.js"></script>
<script type="text/javascript" src="jscript/movement.js"></script>


<title>Monopoly</title>
<link href="css/monopolyCSS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.playerView {
	font-family: Century;
	float: left;
	width: 46%;
	height: 567px;
}
.boardView {
	float: left;
	width: 52%;
	height: 567px;
	z-index: 0;
	padding-right: 20px;
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
	background-color: #C0C0C0;
}
.player1 {
	position: absolute;
	top: 460px;
	z-index: 2;
	visibility: visible;
	left: 550px;
}
.player2 {
	position: absolute;
	top: 530px;
	z-index: 2;
	visibility: visible;
	left: 580px;
}
.playerInfo {
	float: left;
	width: 100%;
}
.body {
	background-color: #FFFFCC;
	width: 1200px;
}

</style>
</head>

<body class="body">
<div id="status" class="header">
	Version 0.10 -- <a href="log.txt" target="_blank">change log</a>
</div>
	<img  id="player1" alt="ryu" class="player1" height="75" src="images/ryu_board_piece.jpg" width="39" />
	<img src="images/elephant_board_piece.png" class="player2" height="40" width="40" />
	<div id="boardView" class="boardView">
		<?php include("includes/board_layout.php"); ?></div>

	<div id="playerView" class="playerView">
		
		<div id="playerInfo" class="playerInfo">
			<?php
				include("php/playerInfo.php");
			?>
		</div>

	</div>
	
	
	
	
	<div id="footer" class="footer">
		Movement is working. Click the board.
	</div>
	
</body>
</html>
