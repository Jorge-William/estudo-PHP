<!DOCTYPE html>
<html>
    <head>
        <title>Teste PHP</title>
    </head>
    <body>
        
        <h1>Teste Array - PHP</h1>
        
        <?php
            
            $nome['nome'] = 'Jorge';
            $idadeJorge['idade'] = 32;
        
        
            $nome['nome'] .= 'William';
            $idadeJorge['idade'] += 2;
        
        
            var_dump ($nome);
            echo "<br>";
            var_dump ($idadeJorge);
        
        ?>
        
    </body>
</html>