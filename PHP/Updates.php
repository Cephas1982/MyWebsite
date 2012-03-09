<?php
//This will post updates from the database. The parameter is how many updates to fetch
	
function getUpdates($updateCounter){
	global $conn;
	$query1 = 'SELECT text, TO_CHAR(update_date, \'MONTH DD, YYYY\') AS POST_DATE
			  FROM updates
			  ORDER BY update_id DESC';
			  
	$query2 = 'SELECT count(update_id) AS TOTAL_UPDATES
			  FROM updates';
 		  
			  
	//Run queries	  
	$stid1 = oci_parse($conn, $query1);
	oci_execute($stid1);

	$stid2 = oci_parse($conn, $query2);
	oci_execute($stid2);
	
	
	//cap maximum updates. 
	$row = oci_fetch_array($stid2, OCI_BOTH);
	if($updateCounter > $row['TOTAL_UPDATES'])
		$updateCounter = $row['TOTAL_UPDATES'];
		
	//echo "updateCounter:" . $updateCounter . "<br /><br />";//TODO: remove, testing only
	for($i = 0; $i < $updateCounter; $i++) {
	
		if(!$row = oci_fetch_array($stid1, OCI_BOTH))
			break;
			
		echo "<br />";
		echo "<p class='timestamp'>" . $row['POST_DATE'] . "</p>";
		echo "<p>" . $row['TEXT'] . "</p>";
		echo "<br />";
			
	}
}
?>

