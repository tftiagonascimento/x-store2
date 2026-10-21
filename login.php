<?php include 'includes/header.php'; ?>

<main>
    <div style="max-width: 400px; margin: 40px auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        <h2 style="text-align: center; margin-bottom: 20px; color: var(--header-bg);">Área de admin</h2>
        
        <?php if (isset($_GET['erro'])): ?>
            <p style="color: #ef4444; text-align: center; margin-bottom: 20px; font-weight: bold;">Usuário ou senha incorretos.</p>
        <?php endif; ?>

        <form action="acts/authenticate.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <div>
                <label for="usuario" style="display: block; margin-bottom: 8px; font-weight: 500;">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; font-size: 1rem;">
            </div>
            
            <div>
                <label for="senha" style="display: block; margin-bottom: 8px; font-weight: 500;">Senha:</label>
                <input type="password" id="senha" name="senha" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 6px; font-size: 1rem;">
            </div>
            
            <button type="submit" style="background-color: var(--header-bg); color: white; padding: 14px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 1rem; transition: 0.3s;">Logar</button>
        </form>
        
        <div style="text-align: center; margin-top: 25px;">
            <a href="index.php" style="color: var(--text-light); text-decoration: none; font-size: 0.9rem;">Voltar para a vitrine</a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>