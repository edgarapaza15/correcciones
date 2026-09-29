<?php
require '../coreapp/Conexion.php';
$conexion = new Conexion();

$codigo = $_REQUEST['cod_usu'];

$sql = "SELECT Cod_inv, Pat_inv, Mat_inv, Nom_inv FROM involucrados1 WHERE Cod_inv = $codigo;";
$valores = $conn->query($sql);
$datos = $valores->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modificar Nombres</title>
  <link rel="stylesheet" type="text/css" href="./css/formulario.css">
</head>
<body>

  
</body>
</html>
