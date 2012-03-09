<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>

<?php
include("functions/connect.php");
?>

<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
	background-color: #000080;
}
.auto-style2 {
	color: #FFFFFF;
	font-size: large;
}
.auto-style4 {
	color: #FFFFFF;
}
</style>
</head>

<body style="background-color: #6666FF" class="auto-style1">

<?php
$conn = dbConnect();

$result = oci_parse($conn, 'SELECT * FROM players');
oci_execute($result);
/*
//TESTING************
$result = oci_parse($conn, 'select * FROM players');
oci_execute($result);

$row = oci_fetch_array($result, OCI_BOTH);
echo $row['PLAYER_NAME'] . " <br />";
*/
//echo $row[0] . " and " . $row['DEPARTMENT_ID']   . " are the same<br>\n";
?>

<table cellpadding="4" cellspacing="3" class="auto-style1">
	<tr>
		<td class="auto-style2">Player Name</td>
		<td class="auto-style2">Player Money</td>
		<td class="auto-style2">Player ???</td>
	</tr>
	<tr>
		<?php $row = oci_fetch_array($result, OCI_BOTH); ?>
		<td id="player1" class="auto-style4"> <?php echo $row['PLAYER_NAME'] ?> </td>
		<td class="auto-style2"><?php echo $row['CASH'] ?> </td>
		<td class="auto-style2">&nbsp;</td>
		
	</tr>
</table>
<p></p>
</body>

</html>
