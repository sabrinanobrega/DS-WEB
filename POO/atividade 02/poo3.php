<?php
abstract class animal {
    public function fazerSom(){
    return "som";
    }
    public function mover(){
    return "andar";
    }
}
    class cachorro extends animal {
        public function fazerSom(){
            return "Au au!";
        }
    }
   
    class gato extends animal{
        public function fazerSom(){
            return "Miau!";
        }
    }
    class passaro extends animal{
        public function mover(){
            return "Voar e " . parent::mover();
    }
    }
//Instanciando objeto
$cachorro = new cachorro();
$cachorro->fazerSom();
echo "cachorro faz: " . $cachorro->fazerSom() . "<br/>";

$gato = new gato();
$gato->fazerSom();
echo "gato faz: " . $gato->fazerSom() . "<br/>";

$passaro = new passaro();
$passaro->mover();
echo "passaro mover: " . $passaro->mover() . "<br/>";
?>

