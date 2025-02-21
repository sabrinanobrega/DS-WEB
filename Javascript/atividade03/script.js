var cartoes = []; // Vetor para armazenar as frutas

function adicionarCartoes() {

var cartoesInput =document.getElementById("cartoesInput");

var cartoes = cartoesInput.value.trim(); //Remove espaços em branco no início e no fim

if (cartoes !== "") {
cartoes.push(cartoes); // Adiciona a frutaao vetor

cartoesInput.value = ""; // Limpa a caixade texto

// Atualiza a lista de frutas na página
atualizarListaDeCartoes();
}
}

function atualizarListaDeCartoes() {

var cartoesLista =document.getElementById("cartoesLista");

cartoesLista.innerHTML = ""; // Limpa alista antes de atualizar

// Itera sobre o vetor de frutas e criaelementos de lista para cada uma

for (var i = 0; i < cartoes.length; i++) {
var li = document.createElement("li");
li.textContent = cartoes[i];
cartoesLista.appendChild(li);
}
}