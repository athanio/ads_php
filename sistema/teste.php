<?php
include_once 'produtos.php';
$p = new Produto();
$p->Inserir("mouse", 45.4);

$dados = $p->Mostrar();

foreach ($dados as $d ) {
    foreach ( $d as $i ){
        echo $i."<br>";
    } 
}