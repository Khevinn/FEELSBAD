<?php
  require_once "session.php";

  foreach ($_POST as $estudante => $value) {
    $$estudante = $value;
  }     
    $fp = fopen(ESTUDO, "a");
    fwrite($fp, $newItem);
    fclose($fp);
  }  
  redirect("http://localhost:8000/estudante1.php");
