<?php

$produtos = [
    [
        "nome" => "whey",
        "preco" => 120.00,
        "estoque" => 10
    ],
    [
        "nome" => "Creatina",
        "preco" => 80.00,
        "estoque" => 25
    ],
    [
        "nome" => "Barrinha",
        "preco" => 18.00,
        "estoque" => 5
    ],
    [
        "nome" => "Calça treino",
        "preco" => 150.00,
        "estoque" => 7
    ]
];


echo "<h3>Produtos e Preços</h3>";
foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . " | Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "<br>";
}

$valorTotalEstoque = 0;

foreach ($produtos as $produto) {
    $valorTotalEstoque += $produto["preco"] * $produto["estoque"];
}


echo "<h3>Valor Total em Estoque</h3>";
echo "R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "<br>";

$alunos = [
    [
        "nome" => "João",
        "matematica" => 8.5,
        "portugues" => 10.00
    ],
    [
        "nome" => "Giovana",
        "matematica" => 9.0,
        "portugues" => 8.0
    ],
    [
        "nome" => "Sabrina",
        "matematica" => 10.00,
        "portugues" => 9,5
    ]
];


echo "<h3>Alunos e Notas</h3>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . " | Matemática: " . number_format($aluno["matematica"], 1, ',', '.') . " | Português: " . number_format($aluno["portugues"], 1, ',', '.') . "<br>";
}


echo "<h3>Médias dos Alunos</h3>";
foreach ($alunos as $aluno) {
    $media = ($aluno["matematica"] + $aluno["portugues"]) / 2;
    echo "Aluno: " . $aluno["nome"] . " | Média: " . number_format($media, 1, ',', '.') . "<br>";
}



?>

