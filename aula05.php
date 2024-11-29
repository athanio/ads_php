<?php
session_start();

function sair(){
   session_destroy();
}

if ($_SESSION['user']){
    echo "Página Home <br> Bem vindo, ";
    echo $_SESSION['user'];


}else {
    header("location:aula04.php");
}
session_destroy();

