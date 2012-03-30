<?php
//COOKIES
$expireTime = 60 * 60 * 24 * 60 + time();//Expire 
setcookie("lastVisit", date("G:i - m/d/y"), $expireTime);
$working = setcookie("lastVisit", date("G:i - m/d/y"), $expireTime);
?>

<?php
session_start();
if(isset($_SESSION['views']))
	$_SESSION['views'] = $_SESSION['views'] + 1;
else
	$_SESSION['views'] = 1;
?>

