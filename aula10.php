<?php
session_start();
$_SESSION['tempo'] = time() + 11;
echo 'Aula 10 i files';
if ($_COOKIE['d'] == null){
    setcookie("d","PHP", time()+30);
}
echo $_COOKIE['d'];
echo "tempo: " . time();
$time = time() + 30;
echo "<br> time 2 " . $time;
?>
<a href="aula11.php"> Ir para aula 11 </a>