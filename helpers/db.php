<?php

// Information to connect to database
$host = 'mysql.hostinger.pt';
$db   = 'u868184278_posts';
$user = 'u868184278_posts';
$pass = 'Jth0zPTZLySYop7q0G';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];

// We use PDO connection
$pdo = new PDO($dsn, $user, $pass, $opt);

?>
