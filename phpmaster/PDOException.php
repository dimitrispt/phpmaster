<?php

$dbhost   = "localhost";
$dbname   = "recipes";
$username = "root";
$password = "pantel1s";


$dsn = "mysql:host=$dbhost;dbname=$dbname";

try {
	$db_conn = new PDO($dsn, $username, $password);
}
catch (PDOException $e) {
	echo "Could not connect to database";
}
?>
   