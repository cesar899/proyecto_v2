<?php
$link = "mysql:host=localhost;dbname=base_colores";
$username = "root";
$password = "root";

try {
	
$pdo = new PDO($link,$username,$password);


} catch (Exception $e) {

	print "!error: " .$e->getMenssage()  . "<br/>";
	die();	
}



?>