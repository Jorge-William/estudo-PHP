<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Teste de foreach</title>
</head>

<body>
    <form>
        <input type="date" name="date" placeholder="Nome">
        <input type="password" name="senha" placeholder="Senha">
        <br>
        <input type="date" name="date" placeholder="Nome">
        <input type="password" name="data" placeholder="Senha">
        <br>
        <input type="date" name="date" placeholder="Nome">
        <input type="password" name="passe" placeholder="Senha">
        <input type="submit" value="Ok">
        <br>
        <br>
        <br>
    </form>

    <?php
            
        
        if(isset($_GET)){
            foreach( $_GET as $key => $value ){
               echo "Nome: " . $key."<br>"; 
               echo "Valor: " . $value."<br>"; 
               echo "<hr>"; 
            }
        }
        
        
        
        ?>

</body>

</html>
