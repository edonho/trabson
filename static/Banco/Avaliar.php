<?php
    $id = (int)$_POST["id"];
    $avaliacao = (int)$_POST["avaliacao"];
    
    // Conectando o banco, se acaso nao conectar vai dar print no erro.
    $con = mysqli_connect("localhost", "edinho", "", "tattoo") or print (mysql_error()); 
    // seta o charset dos dados
    $con->set_charset('utf8');
    
    $pesquisa = mysqli_query($con, "INSERT INTO `Avaliacao`(`id_estudio`, `id_usuario`, `vl_avaliacao`) VALUES (".$id.",36,".$avaliacao.");");
    
    mysqli_close($con); 
?>