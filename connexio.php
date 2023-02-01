<?php 

$db = new mysqli('localhost', 'root', '123456', 'vehicles');

if(!is_null($db->connect_error)){
    echo 'La connexió ha fallat! <br>';
    echo 'Error numero: ' . $db->connect_errno . '<br>';
    echo 'Erro message: ' . $db->connect_error . '<br>';
    die();
}

$basedades = 'CREATE DATABASE IF NOT EXISTS vehicles;';

$taula = 'CREATE TABLE IF NOT EXISTS vehicle (
	id INT AUTO_INCREMENT PRIMARY KEY,
	marca VARCHAR(255) NOT NULL,
	model VARCHAR(255) NOT NULL,
	color VARCHAR(255) NOT NULL,
	combustible VARCHAR(255) NOT NULL,
	matricula VARCHAR(255) NOT NULL UNIQUE,
	any_matricula VARCHAR(255) NOT NULL,
	preu INT
);';

if(!$db->query($basedades)){
    echo 'Query error: ' . $db->error;
    die();
}

if(!$db->query($taula)){
    echo 'Query error: ' . $db->error;
    die();
}

?>