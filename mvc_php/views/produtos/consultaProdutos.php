<h1>Produtos Cadastrados</h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<table class="produtos">
    <tr>
        <th>Nome:</th>
        <th>Preço:</th>
        <th>Estoque:</th>
        <th>Ações:</th>
    </tr>
<?php
    foreach($dados as $dado){
        extract($dado);
        echo "<tr>";
            echo "<td>$nomeProduto</td>";
            echo "<td>$precoProduto</td>";
            echo "<td>$estoqueProduto</td>";
            echo "<td>";
                echo "<a href='produto/$idProduto'><button>Acessar Produto</button></a> ";
                echo "<a href='produto/excluir?id=$idProduto>";
                echo "<button style='color: red;'><i class='fa-solid fa-trash'></i></button>";
                echo "</a>";
            echo "</td>";
        echo '</tr>';
    }
?>
</table>

<a href="produto/cadastro"><button>Cadastrar Produto</button></a>
