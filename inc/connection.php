<?php

try {
	$db = new PDO("mysql:host=shawnmeyer.twinridgebees.local;dbname=shawnmeyer;port=3306","root","password");
	//var_dump($db);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
  echo "Couldn't connect. Try again.";
  //echo $e->getMessage();
  exit;
}