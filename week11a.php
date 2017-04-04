<?php

	include_once 'pdo-connect.php';
	
	$result = prepareAndExecute('SELECT * FROM accounts WHERE email = ?', array("mjlee@njit.edu")); 

	if(!$result) { //if account does not exist
	    header('HTTP/1.1 400 Bad Request');
	    exit("ERROR: Email doesn't exist.");
	} else if ($result['activated'] != 1) {
		header('HTTP/1.1 400 Bad Request');
		exit("ERROR: Account has not been activated yet.");
	} else {
		echo $result['message'];
	}


?>