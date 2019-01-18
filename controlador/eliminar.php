<?php
require_once('../modelo/conexion.php');
require_once('../modelo/dataBase.php');
if (isset($_GET['id'])){
 $id = $_GET['id'];
 $consulta = new DataBase();
 $mensaje = $consulta->eliminarProductos($id);
 echo $mensaje;
}
?>