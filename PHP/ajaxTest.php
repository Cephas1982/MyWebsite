<?php
include("Connect.php");
include("Updates.php");

$count = $_GET['count']; //getUpdates($updateCounter);
getUpdates($count);
?>
