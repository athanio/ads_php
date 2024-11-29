
<?php
echo 'aula 07';
$diaSemana = date('w');
$diaSemana = 0;
$semana = ['Domingo','Segunda','Terça', 'Quarta', 'Quinta','Sexta'];
$prato = ['Lasanha a quatro queijos','Frango ao molho madeira'];
echo $semana[$diaSemana];


?>

<form method='POST'>
    Valor<input type='text' name='valor'>
</form>
<table width="80%" border=1>
   <tr bgcolor=<?php echo $diaSemana == 0? 'blue': 'white'; ?>>
    <td> Domingo </td>
   </tr>
   <tr bgcolor=<?php echo $diaSemana == 1? 'blue': 'white'; ?>>
    <td> Segunda-Feira </td>
   </tr>
   <tr bgcolor=<?php echo $diaSemana == 2? 'blue': 'white'; ?>>
    <td> Terça-Feira </td>
   </tr>
   <tr bgcolor=<?php echo $diaSemana == 3? 'blue': 'white'; ?>>
    <td> Quarta-Feira</td>
   </tr>
   <tr bgcolor=<?php echo $diaSemana == 4? 'blue': 'white'; ?>>
    <td> Quinta-Feira </td>
   </tr>
   <tr bgcolor=<?php echo $diaSemana == 5? 'blue': 'white'; ?>>
    <td> Sexta-Feira </td>
   </tr>
   <tr bgcolor=<?php echo $diaSemana == 6? 'blue': 'white'; ?>>
    <td > Sabado </td>
   </tr>
</table>

<?php 
echo  "Hoje é <strong> " . $semana[$diaSemana].'</strong>';
echo "<br>";
echo "Prato do dia é <strong>" . $prato[$diaSemana].'</strong>';
?>