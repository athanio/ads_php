
<?php
 session_start();
 #session_destroy();
 echo " -   Aula 08 -- ";
 $nome = "Dados do site | do ifpi | parnaiba";
 $dados = explode("|", $nome);
 #print_r($dados);
 echo "<br>";
 echo $dados[2];
 foreach ($dados as $index => $d ){
    $index++;
    echo "<br> $index - " . $d;
 }
 $a = @$_SESSION['voto01']++;
 echo $a;
 function Apagar(){
    session_destroy();
 }
?>
<form>
    <input type="text"> 
    <button> Apagar </button>
</form>

