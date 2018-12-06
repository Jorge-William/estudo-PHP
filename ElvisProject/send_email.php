<?php
    
    $_from = 'jorge_william_cardoso@yahoo.com.br' ;

    $_assunto = $_POST['assunto'];
    $_mensagem = $_POST['mensagem'];


    if (!empty($_assunto)){
        if(!empty($_mensagem)){

    // Configuracao basica para conexao com o banco de dados---------------
        $dbc = mysqli_connect('localhost','root','','elvis_store') or die ('Conexao incompleta!!!!');
        $query = "SELECT * FROM email_list";
        $result = mysqli_query($dbc, $query) or die('Nao foi possivel retornar algo.');
    //---------------------------------------------------------------------

    // Looping para altomatizar o processo repetitivo

   
            while($row = mysqli_fetch_array($result)){
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];

            $msg = "Querida $first_name $last_name, \n $_mensagem";

            $to = $row['email_adress'];

            mail($to, '$_assunto', '$_mensagem', 'From: '.$_from);

            echo 'Mensagem enviada para ' . $to . '.' . '<br />';
            }
        }
    } else {
        echo 'preencha todos os campos'; 
    }

       
 
    // Funcao para fechar a conexao com o banco de dados
        mysqli_close($dbc);
    //--------------------------------------------------


    



?>