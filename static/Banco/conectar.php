<?php
    // Conectando o banco, se acaso nao conectar vai dar print no erro.
    $con = mysqli_connect("localhost", "edinho", "", "tattoo") or print (mysql_error()); 
    // seta o charset dos dados
    $con->set_charset('utf8');
?>