<?php
	session_start();

	// Define database
	// define('dbhost', 'localhost');
	// define('dbuser', 'root');
	// define('dbpass', '');
	// define('dbname', 'cinsys');
//Remote DB
	define('dbhost', 'remotemysql.com');
	define('dbuser', 'HHh5S5qdnc');
	define('dbpass', 'hoUUU48fLk');
	define('dbname', 'HHh5S5qdnc');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
