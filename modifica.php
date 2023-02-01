<?php

// header( "Location: baixa.html");

include 'connexio.php';

$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;
$preu = isset($_POST['preu']) ? $_POST['preu'] : null;

$edita_vehicle = "UPDATE vehicle SET preu = $preu WHERE matricula = '" . $db->real_escape_string($matricula) ."'";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<div class='container'>";
echo"<h1 style='font-family: alkalami, verdana; font-style: bold;'>Vehicles</h1>";
echo"</div>";
echo"<br>";
echo"<br>";
echo"<div class='container'>";
echo"<div class='card'>";
echo"<div class='card-header'>";
echo"<div class='card-body'>";
echo"<div class='col-md-auto'>";

try{
    if(!$db->query($edita_vehicle)){
        echo 'Query error: ' . $db->error;
        die();
    }
    else{
        echo "<br>Numero de files modificades de la base de dades: " . $db->affected_rows . "<br><br>";
    }
}
catch(Exception $e){
    echo "Se ha produït el següent error: ".$e->getMessage();
}

echo "<div class='btn-group' role='group' aria-label='Basic outlined example'>";
echo "<a type='button' href='alta.html' class='btn btn-outline-primary'>Alta</a>";
echo "<a type='button' href='modifica.html' class='btn btn-outline-primary'>Modificar</a>";
echo "<a type='button' href='cerca.html' class='btn btn-outline-primary'>Cercar</a>";
echo "<a type='button' href='baixa.html' class='btn btn-outline-primary'>Baixa</a>";
echo "</div>";

echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
        
    

</body>
</html>
