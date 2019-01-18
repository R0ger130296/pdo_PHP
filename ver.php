<?php 
require_once "modelo/conexion.php";
require_once "modelo/dataBase.php";
require_once "controlador/cargar.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VER PRODUCTOS</title>
</head>
<body>
    <h1>LISTA DE PRODUCTOS</h1>
    <?php cargar(); ?>

</body>
</html>