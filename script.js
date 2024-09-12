const carrinho = document.querySelector('.cestinha-conteiner')

function abrirCestinha(){
    carrinho.classList.add('active')
}

function fechandoCesta(){
    carrinho.classList.remove('active')
}

// -- php de procurar por nome ou por categoria --
// Função de busca
function buscarproduto() {
    const searchTerm = document.getElementById('searchInput').value;

    if (searchTerm) {
        fetch(`search.php?search=${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                exibirResultados(data); // Passa os produtos para a função de exibição
            })
            .catch(error => console.error("Erro ao buscar produto digitado: ", error));
    } else {
        alert("Digite algo para pesquisar.");
    }
}

// Função para exibir o resultado da pesquisa na tela
function exibirResultados(produtos) {
    const containerPrincipal = document.querySelector('.conteiner-principal'); // Corrigir para '.conteiner-principal'
    containerPrincipal.innerHTML = ''; // Limpa os produtos anteriores

    if (produtos.length > 0) { // para saber a quantidade do produto
        produtos.forEach(produto => { // metodo para iterar cada elemento de um array, ajuda a executar uma função especifica p/ cada item
            const produtoElement = document.createElement('div');
            produtoElement.classList.add('primeiras-ofertas'); // adição de uma classe css no js

            produtoElement.innerHTML = `
                <a href="#">
                    <img src="${produto.imagem}" alt="${produto.nome}">
                    <p>${produto.nome}</p>
                </a>
            `;
            containerPrincipal.appendChild(produtoElement); // um elemento html filho/herança
        });
    } else {
        containerPrincipal.innerHTML = '<p>Nenhum produto encontrado</p>';
    }
}
//fim do buscar

//metodo spinner/preloader
window.addEventListener('load', function() {
    document.getElementById('preloader').style.display = 'none';
});
