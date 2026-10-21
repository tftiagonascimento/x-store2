<?php include 'includes/header.php'; ?>

<main>
    <h2>Nossos Produtos</h2>

    <?php $cat_atual = isset($_GET['categoria']) ? $_GET['categoria'] : '';?>

    <div class="filtros">
        <a href="index.php" class="btn-filtro <?php echo $cat_atual == '' ? 'ativo' : ''; ?>">Todos</a>
        <a href="index.php?categoria=Eletronicos" class="btn-filtro <?php echo $cat_atual == 'Eletronicos' ? 'ativo' : ''; ?>">Eletrônicos</a>
        <a href="index.php?categoria=Vestuario" class="btn-filtro <?php echo $cat_atual == 'Vestuario' ? 'ativo' : ''; ?>">Vestuário</a>
        <a href="index.php?categoria=Casa" class="btn-filtro <?php echo $cat_atual == 'Casa' ? 'ativo' : ''; ?>">Casa</a>
        <a href="index.php?categoria=Alimentos" class="btn-filtro <?php echo $cat_atual == 'Alimentos' ? 'ativo' : ''; ?>">Alimentos</a>
        <a href="index.php?categoria=Diversos" class="btn-filtro <?php echo $cat_atual == 'Diversos' ? 'ativo' : ''; ?>">Diversos</a>
    </div>

    <div class="vitrine-grid">
        <?php
        include 'conect.php'; 
        
        if ($cat_atual != '') {
            $sql = "SELECT * FROM produtos WHERE categoria = '$cat_atual' ORDER BY id DESC";
        } else {
            $sql = "SELECT * FROM produtos ORDER BY id DESC";
        }
        
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                ?>
                <div class="card-produto">
                    <img src="<?php echo $row['imagem_url']; ?>" alt="<?php echo $row['nome']; ?>">
                    <span class="categoria"><?php echo $row['categoria']; ?></span>
                    
                    <h3><?php echo $row['nome']; ?></h3>
                    <p class="descricao"><?php echo $row['descricao']; ?></p>
                    <p class="preco">R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></p>
                    <a href="produto.php?id=<?php echo $row['id']; ?>" class="btn-comprar" style="text-decoration: none; display: block; text-align: center;">Eu Quero!</a>
                </div>
                <?php
            }
        } else {
            echo "<p style='text-align:center; width:100%; color: var(--text-light);'>Nenhum produto encontrado nesta categoria.</p>";
        }
        $conn->close();
        ?>
    </div>
</main>
<a class="btn-admin" href="admin.php">Área de admin</a>
<?php include 'includes/footer.php'; ?>