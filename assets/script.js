document.getElementById('formProduto').addEventListener('submit', function(event) {
    const nome = document.getElementById('nome').value;
    const preco = document.getElementById('preco').value;

    if(nome.trim() === '' || preco.trim() === '') {
        alert('Erro: Os campos "Nome" e "Preço" são obrigatórios!');
        event.preventDefault();
    }
});

function confirmarExclusao(id) {
    if(confirm('Tem certeza que deseja deletar este produto? Essa ação não pode ser desfeita.')) {
        window.location.href = 'acts/delete.php?id=' + id;
    }
}