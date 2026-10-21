<?php
include '../conect.php';

if (isset($_GET['id'])) {
    
    $id = intval($_GET['id']);

    $sql = "DELETE FROM produtos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Produto excluído com sucesso!');
                window.location.href='../admin.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao excluir: " . $conn->error . "');
                window.location.href='../admin.php';
              </script>";
    }
} else {
    header("Location: ../admin.php");
    exit;
}

$conn->close();
?>