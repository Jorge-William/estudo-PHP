<?php
    include('cabecalho.php');


    $_email = $_POST['email'];

    if(!empty($_email)){
    $dbc = mysqli_connect('localhost','root','','elvis_store') or die('Nao foi possivel se conectar.');

    $query = "DELETE FROM email_list WHERE email_adress = '$_email'";

    $result = mysqli_query($dbc, $query) or die('Nao foi possivel executar a query');

        echo "<div class='container alertas'>
                    <div class='alert alert-danger'>Contato excluído com sucesso!!!!</div>    
              </div>";

    mysqli_close($dbc);

    } else {
        echo "<div class='alert alert-danger'>Nao foi possivel executar a ação!!!!</div>";
    }


    include('footer.php');
?>