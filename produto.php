<?php
include 'includes/header.php';
include 'conect.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM produtos WHERE id = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 0) {
    echo "<main><h2>Produto não encontrado.</h2><a href='index.php' class='btn-voltar'>⬅ Voltar</a></main>";
    include 'includes/footer.php';
    exit;
}

$produto = $resultado->fetch_assoc();
?>

<main>
    <a href="index.php" class="btn-voltar">Voltar para vitrine</a>
    
    <div class="produto-detalhes">
        <!-- Lado Esquerdo: Imagem Grande -->
        <div class="produto-imagem">
            <img src="<?php echo $produto['imagem_url']; ?>" alt="<?php echo $produto['nome']; ?>">
        </div>
        
        <!-- Lado Direito: Informações e Compra -->
        <div class="produto-info">
            <h2 class="titulo-produto"><?php echo $produto['nome']; ?></h2>
            <p class="preco-destaque">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
            
            <div class="descricao-completa">
                <h3>Detalhes do Produto:</h3>
                <!-- nl2br mantém as quebras de linha que você digitou no painel admin -->
                <p><?php echo nl2br($produto['descricao']); ?></p>
            </div>
            
            <button class="btn-comprar-grande" onclick="alert('Indisponível')">Adicionar ao Carrinho 🛒</button>
        </div>
    </div>
</main>

<?php 
$conn->close();
include 'includes/footer.php'; 
?>