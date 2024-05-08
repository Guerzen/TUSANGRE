<?php 
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="admin";
$dbname="tusangre";



public function conectar() {
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    return $conn;
}

public function cerrarConexion($conn) {
    $conn->close();
}


?>

