<?php
include("connect.php");//connection

$username= $_POST['username'];
$password= md5($_POST['password']);
$email= $_POST['email'];
$last_visit = date('d-M-y');

//update database
//$sql = 'INSERT INTO users(user_id, user_name, email, last_visit)
//		  VALUES (users_pk_seq.nextval, :username, :password, :last_visit)';
	
$sql = 'SELECT user_name
		FROM users
		WHERE UPPER(:username) = UPPER(user_name)';
		

		
//parse		  
$compiled = oci_parse($conn, $sql);

//bind variables
oci_bind_by_name($compiled , ':username', $username);
//oci_bind_by_name($compiled , ':password', $password);


//Run query	
oci_execute($compiled);


//Result*******   CONFIRM USER NAME NOT TAKEN
$queryResult = oci_fetch_array($compiled, OCI_BOTH);

$nameTaken = false;
//$emailTaken  <---- TODO
if($queryResult['USER_NAME']){
	$nameTaken = true;//name is taken b/c it was found in the database
}
else{
	$sql_insert = 'INSERT INTO users(user_id, user_name, password, email, last_visit)
	               VALUES (users_pk_seq.nextval, :username, :password, :email, :last_visit)';

	$compiledQuery = oci_parse($conn, $sql_insert);//parse
	
	//bind variables
	oci_bind_by_name($compiledQuery , ':username', $username);
	oci_bind_by_name($compiledQuery , ':password', $password);
	oci_bind_by_name($compiledQuery , ':email', $email);
	oci_bind_by_name($compiledQuery , ':last_visit', $last_visit);
	
	//run query
	oci_execute($compiledQuery);

}//end else	
	//Send back result
	$result = array($username, $email, $nameTaken);
	
	echo json_encode($result);
