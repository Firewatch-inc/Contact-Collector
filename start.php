<?php

    require_once "engine/settings.php";
    require_once "engine/ctemplater.php";
    require_once "engine/ctools.php";

	$ROOT_PATH = $_SERVER['DOCUMENT_ROOT'];
	$CT = new CTemplater(
		$ROOT_PATH."/templates/tpl", 
		$ROOT_PATH."/templates/tpl_c", 
		$ROOT_PATH."/templates/configs", 
		$ROOT_PATH."/templates/cache"
	);
	
	$DB = new PDO("mysql:dbname=".DATA_BASE_NAME.";host=127.0.0.1", USER_NAME, USER_PASSWORD);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$DB->exec("SET NAMES utf8");

?>
