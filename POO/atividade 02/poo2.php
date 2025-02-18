<?php
class pessoa{
    public $nome = "sabrina";
    protected $idade = "17";

}
class funcionario extends pessoa {

    protected $salario;

        public function salario(){
            return "mostrar o salario";
        }
}


class gerente extends funcionario {
    public function calcularSalario($salario1){
        $salario = 2000;
        echo $salario;
        $this->salario = $salario * 1.20;
        return "seu bonus é". $this->salario;
    }
}

class desenvolvedor extends funcionario {
    public function calcularSalario1($salario2){
        $this->salario2 = $salario2 * 1.10;
        return "seu bonus é". $this->salario2;
    }
}

//instanciando objetos

$objeto = new gerente();
echo "gerente: " .  $objeto->CalcularSalario(1000) . "<br/>";

$objeto2 = new desenvolvedor();
echo "desenvolvedor:" . $objeto2->CalcularSalario1(1000). "<br/>";