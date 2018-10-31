<?php

    $var_nome = $_POST['nome'];
    $var_sobrenome = $_POST['sobrenome'];
    $var_email = $_POST['email'];

    $dbc = mysqli_connect('localhost','root','','elvis_store') or die ("Problemas ao tentar se conectar com o banco");

    $query = "INSERT INTO email_list (first_name, last_name, email_adress)".
                        "VALUES ('$var_nome', '$var_sobrenome', '$var_email')";

    mysqli_query($dbc, $query) or die ("Erro ao consultar o banco de dados.");

    echo 'Cadastro efetuado com sucesso!!!';

    mysqli_close($dbc);



?>