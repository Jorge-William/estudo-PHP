<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-produto.php"); 

    $id = $_POST['id'];
    removeProduto($conexao, $id);

    // PARAR AS REQUISOES
    header("Location: produto-lista.php?removido=true");
    die();
?>



