<?php
include '../conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem_url = $_POST['imagem_url'];

    $sql = "INSERT INTO produtos (nome, categoria, descricao, preco, imagem_url) 
            VALUES ('$nome', '$categoria', '$descricao', '$preco', '$imagem_url')";

    try {
        $conn->query($sql);

        echo "<script>
                alert('Produto cadastrado com sucesso.');
                window.location.href='../admin.php';
              </script>";
              
    } catch (mysqli_sql_exception $e) {
        echo "<script>
                alert('Erro ao cadastrar: O valor do preço é muito alto ou inválido. Verifique e tente novamente.');
                window.history.back();
              </script>";
    }
}
$conn->close();
?>