
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teste de banco de dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <?php 
        include ("conexao.php");
   ?>

    <form action="conexao.php" method="POST">
        <label>login</label>
        <input type="text" name="login"><br /><br />
        <label>password</label>
        <input type="text" name="password"><br /><br />
        <button type="submit">
            entrar
        </button>
    </form>





</body>
</html>
