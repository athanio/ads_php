<?php
 echo "Aula 03 - PHP";
 echo "<br>";
  $a = 190;
  echo $a > 100 ? "<font color='blue'>Verdadeiro</font>": "<font color='red'>Falso</font>";
  for ($i=0; $i < 6; $i++){
    if ($i == 0){
       echo  rand(1,60);
    }else {
        echo " - ".rand(1,60);
    }
  }
  if($_POST){
    echo $_POST['op'];
    $a = $_POST['numero'];
    if ($_POST['btn'] == 'b2'){
        echo rand(50,100);
    }

    // if ($_POST['op'] == '+'){  
    //     echo $a + 2;
    // }
    // if($_POST['op'] == '-'){
    //     echo $a - 2;
    // }

  }

?>
<form method="POST">
<input type="number" name="numero" placeholder="Digite um número">
<select name=op>
    <option value='+'> Somar </option>
    <option value='-'> Subtrair </option> 
    <option value='*'> Multiplicar </option> 
</select>
<button name="btn" value='b1'> Calcular </button>
<button name="btn" value='b2'> Gerar números </button>
</form>

