<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php include 'includes/header.php'; ?>
<main>
    <a href="index.php" class="btn-voltar">Voltar para a vitrine</a>
    <a href="acts/logout.php" class="btn-voltar" style="background-color: #ef4444; margin-left: 10px;">Deslogar</a>
    <h2>Gerenciar Produtos</h2>
    
    <div class="admin-container">
        <form action="acts/create.php" method="POST" id="formProduto" class="form-admin">
            <h3>Cadastrar Novo Produto</h3>
            
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Teclado Mecânico">

            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; margin-bottom: 20px; font-size: 1rem;">
                <option value="Eletronicos">Eletrônicos</option>
                <option value="Vestuario">Vestuário</option>
                <option value="Casa">Casa e Decoração</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Diversos">Diversos</option>
            </select>
            
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="3"></textarea>
            
            <label for="preco">Preço (R$):</label>
            <input type="number" step="0.01" id="preco" name="preco" placeholder="Ex: 150.50">
            
            <label for="imagem_url">URL da Imagem:</label>
            <input type="text" id="imagem_url" name="imagem_url" placeholder="Link da foto do produto">
            
            <button type="submit" class="btn-salvar">Salvar Produto</button>
        </form>

        <?php
            include 'conect.php';
            $sqlCount = "SELECT COUNT(*) as total FROM produtos";
            $resCount = $conn->query($sqlCount);
            $totalProdutos = $resCount->fetch_assoc()['total'];
        ?>
        <div style="background: var(--primary); color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; text-align: center; max-width: 250px;">
            <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Total em Catálogo</h3>
            <p style="font-size: 2rem; font-weight: bold; margin: 0;"><?php echo $totalProdutos; ?></p>
        </div>

        <div class="lista-produtos">
            <h3>Produtos Cadastrados</h3>
            <table class="tabela-admin">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conect.php';

                    $sql = "SELECT id, nome, preco FROM produtos ORDER BY id DESC";
                    $resultado = $conn->query($sql);
                    if ($resultado->num_rows > 0) {
                        while($row = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["nome"] . "</td>";
                            echo "<td>R$ " . number_format($row["preco"], 2, ',', '.') . "</td>";
                            echo "<td>
                                    <a href='edit.php?id=" . $row["id"] . "' class='btn-editar' style='text-decoration: none; display: inline-block; text-align: center;'>Editar</a>
                                    <button class='btn-excluir' onclick='confirmarExclusao(" . $row["id"] . ")'>Excluir</button>
                                    </td>";
                            echo "</tr>";
                            }
                    } else {
                        echo "<tr><td colspan='4'>Nenhum produto cadastrado ainda.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
<script src="assets/script.js"></script>