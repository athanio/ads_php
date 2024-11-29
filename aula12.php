<?php
 session_start();
 echo "Arquivos <br>"; 
 $arquivos = fopen("arquivo.txt", "a"); 
 fwrite($arquivos, ' ');
 $arquivos2 = fopen("arquivo.txt", "r"); 
 $id = @$_SESSION['contador']++;
 $dados  = fread($arquivos2, filesize('arquivo.txt'));
 $valores  = explode("|", $dados);
 foreach ($valores as $valor ) {
    echo $valor . "<br>";
 }
 function Gravar(){
    global $id;    
    $arquivos = fopen("arquivo.txt", "a"); 
    fwrite($arquivos, "\n Testando o arquivo txt $id | ");
 }
 function Apagar() { 
    $arquivos = fopen("arquivo.txt", "w"); 
    fwrite($arquivos,' ');
    session_destroy();
    header("Location:aula12.php");
 }
 if ($_POST){
    if($_POST['btn'] == 'apagar'){
        Apagar();
    }
    if($_POST['btn'] == 'gravar'){
        Gravar();
    }
 }
 ?>
<form method='POST'>
    <button name='btn' value='apagar' > Apagar </button> <br>
    <button name='btn' value='gravar' > Gravar </button> 
</form>