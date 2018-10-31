<?php
    
    $_from = 'jorge_william_cardoso@yahoo.com.br';

    $_assunto = $_POST['assunto'];
    $_mensagem = $_POST['mensagem'];



    // Configuracao basica para conexao com o banco de dados---------------
        $dbc = mysqli_connect('localhost','root','','elvis_store') or die ('Conexao incompleta!!!!');
        $query = "SELECT * FROM email_list";
        $result = mysqli_query($dbc, $query);
    //---------------------------------------------------------------------

    // Looping para altomatizar 
    while($row = mysqli_fetch_array($result)){
        echo $row['first_name'] . ' : ' . $row['last_name'] . ' : ' . $row['email_adress'] . '<br />';
        mail('$row["email_adress"]', '$_assunto', '$_mensagem');
    }

 
    // Funcao para fechar a conexao com o banco de dados
        mysqli_close($dbc);
    //--------------------------------------------------


    



?>