<?php
	
	date_default_timezone_set('America/New_York');
	
	
	$hostname = 'sql.njit.edu';
	$username = 'mjlee';
	$password = 'myPassword';
	$database = 'mjlee';
	
	
    try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>