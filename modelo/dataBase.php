<?php
class DataBase {
    public function insertarProducto($nombre,$descripcion,$categoria,$precio){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into producto(nombre, descripcion, categoria, precio) 
        values (:nombre, :descripcion, :categoria, :precio)";
        $statement = $conexion->prepare($sql);
        $statement -> bindParam(':nombre',$nombre);
        $statement -> bindParam(':descripcion',$descripcion);
        $statement -> bindParam(':categoria',$categoria);
        $statement -> bindParam(':precio',$precio);
        if(!$statement){
            return "Error  no se puede realizar la carga";
        }
        else{
            $statement->execute();
            return "la insercion se realizo con exito";
        }
    }

    public function consultarProductos(){
        $array = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from producto";
        $statement =$conexion->prepare($sql);
        $statement->execute();
        while($resultado = $statement->fetch()){
            $array[]=$resultado;
        }
        return $array;
    }

    public function eliminarProducto(){
        $conexion = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "delete *  from producto where id = :id ";
        $statement = $conexion->prepare($sql);
        $statement->bindParam('id', $id);
        if(!$statement){
            return "No se puede borrar el producto";
        }else{
            $statement->execute();
            return "el registro fue eliminado con exito";
        }
    }
}


?>