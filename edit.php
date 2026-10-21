<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php
include 'conect.php';

if (!isset($_GET['id'])) {
    header("Location: admin.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM produtos WHERE id = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 0) {
    die("Produto não encontrado.");
}

$produto = $resultado->fetch_assoc();
?>

<?php include 'includes/header.php'; ?>
<main>
    <a href="admin.php" class="btn-voltar">Voltar para admin</a>
    <div class="admin-container" style="justify-content: center;">
        <form action="acts/update.php" method="POST" class="form-admin" style="max-width: 600px;">
            <h3>Editando: <?php echo $produto['nome']; ?></h3>
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $produto['nome']; ?>" required>

            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; margin-bottom: 20px; font-size: 1rem;">
                
                <option value="Eletronicos" <?php echo ($produto['categoria'] == 'Eletronicos') ? 'selected' : ''; ?>>Eletrônicos</option>
                <option value="Vestuario" <?php echo ($produto['categoria'] == 'Vestuario') ? 'selected' : ''; ?>>Vestuário</option>
                <option value="Casa" <?php echo ($produto['categoria'] == 'Casa') ? 'selected' : ''; ?>>Casa e Decoração</option>
                <option value="Alimentos" <?php echo ($produto['categoria'] == 'Alimentos') ? 'selected' : ''; ?>>Alimentos</option>
                <option value="Diversos" <?php echo ($produto['categoria'] == 'Diversos') ? 'selected' : ''; ?>>Diversos</option>
            </select>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="3" required><?php echo $produto['descricao']; ?></textarea>

            <label for="preco">Preço (R$):</label>
            <input type="number" step="0.01" id="preco" name="preco" value="<?php echo $produto['preco']; ?>" required>

            <label for="imagem_url">URL da Imagem:</label>
            <input type="text" id="imagem_url" name="imagem_url" value="<?php echo $produto['imagem_url']; ?>" required>

            <button type="submit" class="btn-salvar" style="background: #f59e0b;">Atualizar Produto</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>