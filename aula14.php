<?php

class Carro{
   private $modelo;
   public $cor;
   public function __construct($modelo, $cor){
     $this->modelo = $modelo;
     $this->cor = $cor;    
   }
   public function getCor(){
     return $this->cor;
   }
   public function setCor($cores){
     $this->cor = $cores;
   }
   public function getModelo(){
    echo $this->modelo;
   }
  }
  $carro1 = new Carro('palio', 'azul');
  $carro1->getModelo() . "<br>";
  echo $carro1->getCor();
  $carro1->setCor('vermelho');
  echo "<br>";
  echo $carro1->getCor();
?>

<form method='POST'>
  <input type='text' placeholder="Digite o Modelo do Carro">
</form>