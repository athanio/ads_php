
<?php
session_start();
#session_destroy();
 class Carro{
    public $modelo;
    public $cor;
    public function __construct($modelo, $cor){
        $this->modelo = $modelo;
        $this->cor = $cor;
    }
    public function getModelo(){
       return $this->modelo;
    }
    public function getCor(){
      return $this->cor;
    }    
    public function Informacao(){
        echo "Modelo: " . $this->modelo. "<br>";
        echo "Cor: " . $this->cor ."<br>";
        echo "<hr>";
    }
 }  
 class GerenciarCarro{
    private $carro = [];
    public function __construct(){
        if(isset($_SESSION['carro'])){
          $this->carro = $_SESSION['carro'];
        }
    }
    public function addCarro(Carro $carro){
       $this->carro[] = $carro;
       $_SESSION['carro'] = $this->carro;
    }
    public function listarCarros(){
        foreach($this->carro as $index => $carro){
            echo "Carros ";
            $index++;
            echo "$index". "<br>";
            $carro->Informacao();
        }
    }   
 }
 $carro = new GerenciarCarro();

 if ($_POST){
    if($_POST['btn'] ==  'b1'){
        $carro1 = new Carro($_POST['modelo'], $_POST['cor']);
        $carro->addCarro($carro1);
    }
 }
 
 $carro->listarCarros();
 ?>
 <form method='POST'>
  Modelo: <input type='text' name='modelo'><br>
  Cor: <input type='text' name='cor'>
  <button name='btn' value='b1'> Enviar</button>
</form>

