<?php

require 'vendor/autoload.php';
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	// Offline - Localhost
	define("BASE_URL", "http://localhost/projeto_estoque/");
	$config['dbname'] = 'igreja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	// Caso esteja no Servidor Online
	define("BASE_URL", "https://www.seusite.com.br/");
	$config['dbname'] = '';
	$config['host'] = 'localhost';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}