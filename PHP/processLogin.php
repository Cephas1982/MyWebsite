<?php
include("connect.php");//connection

$nick = $_POST['nick'];
$email = $_POST['email'];
$last_visit = date('d-M-y');

//update database
$sql = 'INSERT INTO users(user_id, user_name, email, last_visit)
		  VALUES (users_pk_seq.nextval, :nick, :email, :last_visit)';

//parse		  
$compiled = oci_parse($conn, $sql);

//bind variables
oci_bind_by_name($compiled , ':nick', $nick);
oci_bind_by_name($compiled , ':email', $email);
oci_bind_by_name($compiled , ':last_visit', $last_visit);


//Run query	
oci_execute($compiled);

//Result
echo $nick;
//echo "error: " . var_dump( oci_error());
?>
