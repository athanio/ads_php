<?php
    //count
    //array_push (nome, valor, dado)
    //array_pop(nome)
    //in_array
    
    echo "Aula 13 PHP - lista <br>";
    $listas = [ 'manga','pera', 'uva', 'maça']; 
    //echo $listas[0];
    array_push($listas, "Banana","abacaxi");
    array_pop($listas);
    if($_POST){
        $fruta = $_POST['fruta'];
        array_push($listas,$fruta);
    }
    $cont =  count($listas);
    //print_r($listas);
    for ($i=0; $i < $cont; $i++){
        echo "<br>".$listas[$i];
    }
    $idade = array('joao'=> 23, 'Maria'=> 24 , 'Pedro'=> 32);
    foreach($idade as $d => $chave){
        echo "<br> $chave - ".$d;
    }
    if(in_array("Maça", $listas)){
        echo "<br>Banana está na lista";
    }else {
        echo "<br>Fruta nao esta na lista";
    }
?>
<form method="POST">
    <input type='text' name="fruta" placeholder="Digite uma fruta">
    <button> Enviar </button>
</form>