<?php

header( "Location: alta.html");

include 'connexio.php';

$marca = isset($_POST['marca']) ? $_POST['marca'] : null;
$model = isset($_POST['model']) ? $_POST['model'] : null;
$color = isset($_POST['color']) ? $_POST['color'] : null;
$combustible = isset($_POST['combustible']) ? $_POST['combustible'] : null;
$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;
$anyMatricula = isset($_POST['anyMatricula']) ? $_POST['anyMatricula'] : null;
$preu = isset($_POST['preu']) ? $_POST['preu'] : null;

$insertar_vehicle = "INSERT INTO vehicle (marca, model, color, combustible, matricula, any_matricula, preu) VALUES ('" . $db->real_escape_string($marca) . "', '" . $db->real_escape_string($model) . "', '" . $db->real_escape_string($color) . "', '" . $db->real_escape_string($combustible) . "', '" . $db->real_escape_string($matricula) . "', '" . $db->real_escape_string($anyMatricula) . "', '" . $db->real_escape_string($preu) . "')";

if(!$db->query($insertar_vehicle)){
    echo 'Query error: ' . $db->error;
    die();
}
else{
    echo "<br>S'han inserit les dades del vehicle a la taula de manera correcte <br>";
}