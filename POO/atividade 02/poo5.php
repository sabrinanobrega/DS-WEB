<?php
abstract class Produto {
    protected $nome;
    protected $preco;
    protected $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    abstract public function calcularDesconto();
   
    public function getPrecoFinal() {
        return $this->calcularDesconto();
    }
}

class Eletronico extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.10;
        $precoFinal = $this->preco - $desconto;

        if ($this->estoque < 5) {
            $precoFinal -= $precoFinal * 0.10;
        }
       
        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.20;
        $precoFinal = $this->preco - $desconto;

        if ($this->estoque < 5) {
            $precoFinal -= $precoFinal * 0.10;
        }
       
        return $precoFinal;
    }
}

$celular = new Eletronico("iPhone", 3000, 4);
$bone = new Roupa("Boné Aba Reta", 200, 10);

echo "Celular (iPhone): R$ " . number_format($celular->getPrecoFinal(), 2, ',', '.') . "<br/>";
echo "Boné Aba Reta: R$ " . number_format($bone->getPrecoFinal(), 2, ',', '.') . "<br/>";
?>


