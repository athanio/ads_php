<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
   $vetor = ['blue','red','green','pink','gray','lighblue'];
   $semana = date('w');
   echo $semana;

   
?>

<body bgcolor=<?php echo $vetor[$semana]; ?>>
    Dados do site
</body>
</html>

<?php
    $contador=0;
    echo date("d-m-Y");
    echo "<br>";
    $nome = "ifpi";
    $nome = trim($nome);
    $nome = strtolower($nome);
    $sub = substr($nome, 2,4);
    echo $sub;
    echo strlen($nome);
    echo $nome;
    $dados = "os valores de todos os metadados";
    $d = explode(' ', $dados);
    echo "<hr>";
    $contador++;
    echo $contador;
    for($i=0; $i < count($d) ; $i++){
        echo "" . $d[$i] ;
    }
    echo "<hr>";
    //$get = $_GET['nome'];
    //echo 'Valor do Get ' . $get;
    echo "<hr>";  
    if($_POST){
        echo 'Valor do POST ' . $_POST['nome'];
        echo '<br>';
        echo "Estado " . $_POST['estado'];
        $v = $_POST['b'];
        //print_r($v);
        echo '<br>';    
       
        echo "Estilo:";
        for($i=0; $i < count($v) ; $i++){
            echo " ". $v[$i];            
        }
    } 
?>
<form method='POST'>
    <input type='text' name='nome' placeholder="Digite seu nome">
    <select name='estado'>
        <option value='PI' > PIAUI </option>
        <option value='SP' > São Paulo </option>
     </select> 
     <input type='checkbox' name='b[]' value='rock'> rock
     <input type='checkbox' name='b[]' value='pop'> pop
     <input type='checkbox' name='b[]' value='pagode'> pagode
      

    <button type='submit' name='btn1' value='b1'> Enviar </button>
</form>