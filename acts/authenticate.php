<?php
session_start();
include '../conect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows == 1) {
        $user = $resultado->fetch_assoc();
        
        // Verifica se a senha confere (suporta texto simples ou hash)
        if ($senha === $user['senha'] || password_verify($senha, $user['senha'])) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $user['usuario'];
            
            header("Location: ../admin.php");
            exit;
        }
    }

    // Se falhar, redireciona de volta para o login com erro
    header("Location: ../login.php?erro=1");
    exit;
}

$conn->close();
?>