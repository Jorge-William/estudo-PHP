<?php
    include("teste_banco_de_dados/index.php");

    $login = $_POST["login"];
    $senha = $_POST["senha"];



    $conexao = mysqli_connect('localhost','root','','teste_DB')
        or die ('Erro ao tentar conexao');

    $query = "INSERT INTO TB_usuario (usuario, senha)
                VALUES ('{$login}','{$senha}')";

    $result = mysqli_query($conexao, $query) or die("Algo deu errado com a conexao com o banco de dados!!!!");

    mysqli_close($conexao);
    
    ?>