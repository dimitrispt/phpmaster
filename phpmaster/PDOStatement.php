<?php
$db_conn = new PDO('mysql:host=localhost;dbname=recipes','root', 'pantel1s');

$pud = "Pudding";

try{
	$db_conn->beginTransactio();
	
	$SQL = 'UPDATE categories SET id=17 WHERE name=? ';
	$stmt = $db_conn->prepare($SQL);
		
	$stmt->bindParam(1,$pud);
	
	$stmt->execute();
	
	$lastID = $db_conn->lastInsertId();

	$db_conn->commit();
	
}
catch (PDOException $e) {
	$db_conn->rollBack();
	$error = $e->getMessage();	
}
?>