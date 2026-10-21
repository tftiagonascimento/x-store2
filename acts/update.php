<?php
include '../conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem_url = $_POST['imagem_url'];

    $sql = "UPDATE produtos 
            SET nome = '$nome', categoria = '$categoria', descricao = '$descricao', preco = '$preco', imagem_url = '$imagem_url' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Produto atualizado com sucesso!');
                window.location.href='../admin.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao atualizar: " . $conn->error . "');
                window.location.href='../admin.php';
              </script>";
    }
}
$conn->close();
?>