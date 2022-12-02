<?php
session_start();

$pdo = new PDO(
	'mysql:host=localhost;dbname=grpc1;',
	'root',
	'root',
	array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

$passwordSecurity = "Glkh68isz354&4d.20vzlhush'ç_";
?>
