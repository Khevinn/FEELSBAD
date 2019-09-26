<?php
 		$estudantes =  $_POST['nome'] . ',' . $_POST['email'] . ',' . $_POST['matricula']. ',' . $_POST['escola'] . ',' . $_POST['idade'] . ',' . $_POST['Remover'] . ',' . "\n";
    $estudante = fopen('estudantes.csv', 'a');
    fwrite($estudante, $estudantes);
    header("Location: estudante1.php"); 
?>


