
<?php

// $b =0;
// $a = $b + 'a';

// echo $a;

$ip = $_SERVER['REMOTE_ADDR'];

echo $ip;
echo "<br>";



$frase = "Essa é minha casa";

     $posicao = stripos($frase, "essa");

     ($posicao)? print "Achei" : print "Não achei";