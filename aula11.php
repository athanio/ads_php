<?php
  session_start();
  echo "ID: " .  $_SESSION['tempo'];
  echo "<br>";
  if(time() < $_SESSION['tempo'] ){
?>
  <html>
    <hr>
    <h2> Site de compras </h2>
    <hr>
    <ul>
        <li> celular </li>
  </ul>
  <?php
  }
  
  else {
    echo "maior";
    header("Location: aula10.php");
  }
?>