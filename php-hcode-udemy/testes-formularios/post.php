<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>$_POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Teste de formulário</h1>

    <form method="POST" action="control-form.php" names="Meu form">
        Nome
        <input id="name"  name="nome" type="text" value="Jorge William">
        <br>
        Senha
        <input id="senha" name="senha" type="password" value="123">
        <br>
        <input type="button" value="Entrar">
    </form>
    <?PHP
        echo 'meu nome: '.$_POST['nome'];
        echo 'A senha é: '.$_POST['senha'];
    ?>
   
    
    
</body>
</html>

