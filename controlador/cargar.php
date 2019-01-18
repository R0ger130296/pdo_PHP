<?php 
function cargar(){
    $consulta = new DataBase();
    $filas = $consulta->consultarProductos();
    echo "<table border=1 bordercolor=skyblue> 
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>CATEGORIA</th>
        <th>PRECIO</th>";
foreach($filas as $fila){
    echo"<tr>";
    echo "<td>".$fila['id']."</td>";    
    echo "<td>".$fila['nombre']."</td>";    
    echo "<td>".$fila['descripcion']."</td>";    
    echo "<td>".$fila['categoria']."</td>";    
    echo "<td>".$fila['precio']."</td>";  
    echo "<td><a href= 'controlador/eliminar.php?id=".$fila['id']."'>eliminar</td>";  
    echo"</tr>";
}
   echo "</table>";
}
?>