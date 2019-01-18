<?php
class Conexion{
    public function get_conexion(){
        $user = "postgres";
        $pass = "1234";
        $host = "localhost";
        $db = "tereapdo";
       $conexion = new PDO ("pgsql:host=$host;dbname=$db;",$user,$pass);
        return $conexion;
    }
}
// // $pruebacon = new Conexion();
//     $con = $pruebacon->get_conexion();
//     if ($con) {
//        echo"Se conecto exitosamente";
//         }else{
//             echo "error";
// }
?>