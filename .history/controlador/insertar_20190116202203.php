<? php
require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.dataBase.php');

$mesaje = null;
 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];
 $categoria = $_POST['categoria'];
 $precio = $_POST['precio'];
If (strlen($nombre) > 0 && strlen($descripcion) > && strlen($categoria) > 0 &&
strlen($precio) > 0){
	$consulta = new DateBase(); 
	$mensaje = $consulta->insertarProducto($nombre,$descripcion,$categoria, $precio);
	