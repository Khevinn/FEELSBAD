<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Escola</title>
  <link rel="stylesheet">
   
</head>
<body>
  <style>
  

    body{
     display: flex;
     justify-content: center;
     align-items: left;
    }
 
}
  tr:nth-child(odd){
    background:#B6E3F3;
}
  tr:nth-child(even){
    background:#09BC13;
    
  </style>

  
<?php
    $escolas = file('escolas.csv');
    for($i = 0; $i < sizeof($escolas); $i++) {
        $escolas[$i] = explode(",", $escolas[$i]);
    }
?>
<div>
  <table>
  <tr>
    <th>Nome</th>
  
  </tr>
   <?php foreach($escolas as $key => $escola):?>
    <tr>
    <?php foreach($escola as $escola1):?>
      <td><?= $escola1?></td>
  <?php endforeach?>
    <td>
    <a class="btn-remove" href="include.php?id=<?= $key?>"> X </a>
    </td>
      </tr>
    <?php endforeach?>
  </table>
  
  <form action="addescola.php" method="POST">
      <legend><strong>Cadastro de Escolas</strong></legend>
        <input type="text"  name="nome" placeholder="Nome">



      <input type="submit" value="Cadastrar">
  </form>
  </div>




</body>

</html>
