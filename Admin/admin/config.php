<?php

	$DB_HOST = '127.0.0.1';
	$DB_USER = 'root';
	$DB_PASS = 'toor';
	$DB_NAME = 'db_nisc';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
