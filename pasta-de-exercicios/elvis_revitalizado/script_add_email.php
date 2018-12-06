<?php
    include('cabecalho.php');

$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_email = $_POST["email"];



if(!empty($_nome) && !empty($_sobrenome) && !empty($_email)){

    $dbc = mysqli_connect('localhost','root','','elvis_store') or die ("Erro ao tentar se conectar ao banco de dados!!!");

    $query = "INSERT INTO email_list (first_name, last_name, email_adress)".
                            "VALUES ('$_nome', '$_sobrenome', '$_email')";

    $result = mysqli_query($dbc, $query) or die ("Nao foi possivel executar a query!!!");

    if($query){
        echo 
            "<div class='container alertas'>
                <div class=' alert alert-success'>Contato cadastrado com sucesso!!!!</div>
            </div>";
            
            }
} else {
    echo "<div class='container'>
            <div class='alert alert-danger'>Cadastro não efetuado!!!</div>
          </div>";
    
    
    

}
    
    include('footer.php');
?>