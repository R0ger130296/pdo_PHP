<?php
class conexion{
    public function get_conexion(){
        $user = "postgress";
        $pass = "lenin1234";
        $host = "localhost";
        $db = "productos";

        $conexion = new PDO ("pgsql:host= $host;dbname=$db", $user,$pass);
        return $conexion;
    }
    $pruebacon =new Conexion();
    $con = $pruebacon ->get_conexion();
    if ($con) {
       echo 
    }
}
?>