<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Tela de cadastro</title>
</head>

<body>

    <div class="container">
        <h1 class="espacamento">Cadastro de usuário</h1>
        <div class="row">
            <div class="col-md-8 lateral-dir">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome">
                    <br>
                    <label>Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome">
                    <br>
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    <br>
                    <label>Digite uma senha</label>
                    <input type="password" class="form-control" name="senha">
                    <br>
                    <label>Digite novamente a senha</label>
                    <input type="password" class="form-control">
                    <br>
                    <button type="button" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                    <button type="button" class="btn btn-danger">Limpar</button>
                </div>
            </div>
            <div class="col-md-4 lateral-esq">
                <div class="form-group">
                    <h2>Login</h2>
                    <br>
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome">
                    <br>
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha">
                    <br>
                    <input type="submit" class="btn btn-success" value="Ok">
                </div>
            </div>
        </div>
    </div>

    <?php
    
    
    
    if( isset( $_GET)){
        foreach( $_GET as $key => $value ){
            
            echo "Nome do campo: ".$key;
            
            echo "Valor do campo: ".$value;
            
            echo "<hr>";
        }   
    }
    
    ?>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
