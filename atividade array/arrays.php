<?php
// array de frutas
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];

$frutas []= "abacaxi";

sort($frutas);
print_r($frutas);

//  foreach para exibir elemento
foreach ($frutas as $fruta) {
    echo $fruta . "<br><br>";
}

// Criando um array associativo para o produto
$produto = [
    "nome" => "Produtos",
    "preco" => 9999,
    "estoque" => 9999,
];

$produto["preco"] = 4999;

// Exibindo as informações em formato de lista
echo "<ul>";
foreach ($produto as $chave => $valor) {
    echo "<li>" . ucfirst($chave) . ": " . $valor . "</li>";
}
echo "</ul>";

$unidadesVendidas = 5;
$valorTotal = $produto["preco"] * $unidadesVendidas;

// Exibindo o valor total da venda
echo "Venda de $unidadesVendidas unidades: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";

$nomes = ["Teclado", "Mouse", "Monitor"];
$precos = [150.00, 80.00, 1200.00];

$produtos = array_combine($nomes, $precos);

echo "<h3>Produtos e Preços</h3>";
echo "<ul>";
foreach ($produtos as $nome => $preco) {
    echo "<li>$nome: R$ " . number_format($preco, 2, ',', '.') . "</li>";
}
echo "</ul>";

$cores = ["vermelho", "azul", "cinza", "amarelo", "preto"];
$corProcurada = "verde";

if (in_array($corProcurada, $cores)) {
    echo "A cor '$corProcurada' está presente no array de cores.<br>";
} else {
    echo "A cor '$corProcurada' não está presente no array de cores.<br>";
}

$numeros = [10, 20, 30, 40, 50]; 

$soma = array_sum($numeros); 
$media = $soma / count($numeros); 

echo "<h3>Soma e Média </h3>";
echo "Soma: $soma<br>";
echo "Média: $media<br>";
    ?>



