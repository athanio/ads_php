<?php
session_start();
#session_destroy();
echo $_SESSION['cont']++;
#session_destroy();
$user ='admin';
$pass = '123';
echo "Bem vindo, ";

$a = 14;
echo $a > 10? 'verdadeiro': 'falso';

setcookie('testando','ifpi', time()+30);


#echo $_SESSION['nome'];
if($_POST){
    if($_POST['nome'] == $user && $_POST['senha']== $pass){
        $_SESSION['user'] = $user;
        header('location:aula05.php');
    }else {
        echo "<font color=red> Senha ou usuário invalido";
    }
}
?>
<form method='POST'>
    <input type='text' name='nome' placeholder="Digite seu nome"><br>
    <input type='password' name='senha' placeholder="Digite sua senha"><br>
    <button type="submit" name='btn' value='b1'> Enviar </button>

    