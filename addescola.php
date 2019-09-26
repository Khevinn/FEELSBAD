<?php
 		$escolas =  $_POST['nome']  . "\n";
    $escola = fopen('escolas.csv', 'a');
    fwrite($escola, $escolas);
    header("Location: escola.php"); 
?>