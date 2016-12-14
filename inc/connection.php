<?php

try {
	$db = new PDO("mysql:host=127.0.0.1;dbname=shawnmeyer;port=3306","root","Saddad22");
	//var_dump($db);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
  echo "Failed to connect. This error is coming from inside the house! (connection.php)";
  //echo $e->getMessage();
  exit;
}
