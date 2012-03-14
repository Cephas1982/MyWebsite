<?php
//Connects to database
$conn = oci_connect('lee', 'test', 'localhost/XE');
if(!$conn)
	echo "Error connecting to db ---debug----";
/*
$stid = oci_parse($conn, 'select table_name from user_tables');
oci_execute($stid);


echo "<table>\n";
while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
    }
    echo "</tr>\n";

}
echo "</table>\n";
*/
?>