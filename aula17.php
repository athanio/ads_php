<?php
require_once 'aula16.php';
echo '<hr>';    
$file = new FileManager('arquivo.txt');
$file->createFile(); 
echo "<br>";
$file->escreverFile("Primeira Linha criada");
$file->escreverFile("Segunda Linha criada");
$file->escreverFile("Terceira Linha criada");
echo '<br>';
echo '<br>';
//echo "<pre>" . $file->lerFile() . "<pre>";
echo nl2br($file->lerFile());
echo $file->deletaFile();






