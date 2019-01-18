<?php
     class DataBase{
         public function insertarProducto($nombre,$descripcion,$categoria, $precio){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "insert into producto (nombre, descripcion, categoria"
         }
     }