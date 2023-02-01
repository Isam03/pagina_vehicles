<?php

include 'connexio.php';

$mes = isset($_POST['mesCar']) ? $_POST['mesCar'] : null;
$menys = isset($_POST['mesEconomic']) ? $_POST['mesEconomic'] : null;

if(!$mes && !$menys){
    $query = "SELECT * from vehicle";
    $result = mysqli_query($db, $query);
}

if($mes && !$menys){
    $query = "SELECT * FROM vehicle WHERE preu >= $mes";
    $result = mysqli_query($db, $query);
}

if(!$mes && $menys){
    $query = "SELECT * FROM vehicle WHERE preu <= $menys";
    $result = mysqli_query($db, $query);
}

if($mes && $menys){
    $query = "SELECT * FROM vehicle WHERE preu >= $mes OR preu <= $menys";
    $result = mysqli_query($db, $query);
}

if (!$result)
{
   echo 'Query error: ' . mysqli_error($db);
   die();
}


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
echo "<a class='btn btn-primary' href='cerca.html' role='button'><i class='bi bi-arrow-left'></i></a><br>";
echo"<div class='card-body'>";
echo"<div class='col-md-auto'>";
echo "<table class='table table-hover'>";

echo "<tr>";
echo "<th> Marca </th>";
echo "<th> Model </th>";
echo "<th> Color </th>";
echo "<th> Combustible </th>";
echo "<th> Matricula </th>";
echo "<th> Any de matricula </th>";
echo "<th> Preu </th>";
                                
while ($row = mysqli_fetch_assoc($result))
{
   echo "</tr>";
   echo "<tr>";
   echo "<td> " . $row['marca'] . "</td>";
   echo "<td> " . $row['model'] . "</td>";
   echo "<td> " . $row['color'] . "</td>";
   echo "<td> " . $row['combustible'] . "</td>";
   echo "<td> " . $row['matricula'] . "</td>";
   echo "<td> " . $row['any_matricula'] . "</td>";
   echo "<td> " . $row['preu'] . "</td>";
   echo "</tr>";
}

echo "<table>";
echo "<a href='alta.html' type='button' class='btn btn-dark'>+ afegir vehicle</a>";
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