
<?php
#funções
# 1 Cria o novo vetor com n³ de um vetor de numeros [3,5,7,9,12,13]


# 2 Filtar valores maiores que 10 de um Array de números 
   #obs Gerar vetor com rand de 50 números

# 3 Calcular o total de uma compra aplicando uma taxa de 15%
    #obs Gerar vetor com rand 30 valores da compra

$valor = 10;
function Soma($a, $b){
    global $valor;
    return $a + $b * $valor ;
}
echo Soma(3,6);
$soma = fn($a,$b) => ($a* 2) + $b;
echo "<br>".$soma(3,7);
echo "<hr>";
$taxa = 0.1;
$calcular = fn($preco) =>  $preco  + ($preco * $taxa);
echo "<br>".$calcular(100) ."<br>";

$numeros = [1,2,3,4,5,6,8];
$d = array_map(fn($n) => $n * 2, $numeros);
print_r($d);
echo "<br>";
echo "<br>";
$pares = array_filter($numeros, fn($n)=> $n % 2 === 0);
print_r($pares);


