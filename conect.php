<?php
//Conexão com o banco de dados

$host = "localhost";
$usuario = "root";
$senha = "Jtc@190416";
$database = "x_store";


$conn = new mysqli($host, $usuario, $senha, $database);

if ($conn->connect_error) {
    die("Falha na conexão com o banco: " . $conn->connect_error);
}
?>