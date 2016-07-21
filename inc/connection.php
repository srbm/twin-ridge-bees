<?php

try {
	$db = new PDO("mysql:host=127.0.0.1;dbname=shawnmeyer;port=3306","root","password");
	//var_dump($db);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
  echo "Failed to connect. But it's cool, you got this.";
  //echo $e->getMessage();
  exit;
}