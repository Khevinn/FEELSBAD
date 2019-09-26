<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Estudante</title>
  <link rel="stylesheet">
   
</head>
<body>
  <style>

  table, tr, td, th {
  border: 1px solid black;
  border-collapse: collapse;
  width: 30%;
  height: 30%;
  font-size: 25px;
}
 
   input{
  display: block;
  padding: .1em;
    width: 95%;
    font-size: 100%;
    /*margin-left: 0%;*/
}

  

    body{
     display: flex;
     justify-content: center;
     /*align-items: left;*/

    }
  table{text-align:center;
        font-size: 150%; 
        /*width:80%;*/
}
  tr:nth-child(odd){
    background:#B6E3F3;
}
  tr:nth-child(even){
    background:#09BC13;

    
  </style>

  
<?php
    $estudantes = file('estudantes.csv');
    for($i = 0; $i < sizeof($estudantes); $i++) {
        $estudantes[$i] = explode(",", $estudantes[$i]);
    }
    
    $escolas = file('escolas.csv');
    for($i = 0; $i < sizeof($escolas); $i++) {
        $escolas [$i] = explode(",", $escolas [$i]);
      
    }
?>
<div>
  <table>
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Matrícula</th>
    <th>Escola</th>
    <th>Idade</th>
    <th>Remover</th>
  </tr>
   <?php foreach($estudantes as $key => $estudante):?>
    <tr>
    <?php foreach($estudante as $estudante1):?>
      <td><?= $estudante1?></td>
  <?php endforeach?>
    <td>
    <a class="btn-remove" href="implode.php?id=<?= $key?>"> X </a>
    </td>
      </tr>
    <?php endforeach?>
  </table>
  
  <form action="addestudante.php" method="POST">
      <legend><strong>Cadastro do Estudante</strong></legend>
        <input type="text"  name="nome" placeholder="Nome">
<input type="email" name="email" id="email" placeholder="Email">
<input type="number" name="matricula" id="matricula" placeholder="Matrícula">  
<input type="text" name="escola" id="escola" placeholder="Escola">
<input type="number" name="idade" id="idade" placeholder="Idade">   
<!-- <input type="text" name="remover" id="remover">   
 -->    
      <input type="submit" value="Cadastrar">
       


  </form>
  </div>




</body>

</html>
