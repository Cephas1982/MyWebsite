<?php
global $conn;
	
	$query = 'SELECT description AS DESCRIP
			  FROM achievements
			  WHERE achievement_id = 1';
			  
	$countQuery = 'SELECT COUNT(*) AS MAXCOUNT
	     		   FROM achievements';
			  
			  
	$stid = oci_parse($conn, $query);
	$stid2 = oci_parse($conn, $countQuery);
	oci_execute($stid);	
	oci_execute($stid2);	

	$achievement_result = oci_fetch_array($stid, OCI_BOTH);
	$achievement_count = oci_fetch_array($stid2, OCI_BOTH);
			  


?>