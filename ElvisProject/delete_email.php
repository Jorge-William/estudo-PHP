<?php
    
    $_email = $_POST['email'];

    $dbc = mysqli_connect('localhost','root','','elvis_store') or die ("Nao foi possivel se conectar ao banco de dados!!!");

    $query = "DELETE FROM email_list WHERE email_adress = '$_email'";

    $result = mysqli_query($dbc, $query) or die("Algo deu errado.");

    if ($result){
        echo "Email foi excluido da listagem de contatos.";
        mysqli_close($dbc);
    } else {
        echo "Algo deu errado";
        mysqli_close($dbc);
    }  


    


    


