<?php
function dbConnect(){
	$conn = oci_connect('monopoly', 'ljcephas', 'localhost/XE');
	
	if(!$conn){
		$err = oci_error();
		echo "$err";	
	}
	else{ 
		echo "connection successful" . "<br />";
		return $conn;
	}
}
?>

<?php 
function dbDisconnect($conn){
	oci_close($conn);
	echo "<br /> disconnected from database";
}?>