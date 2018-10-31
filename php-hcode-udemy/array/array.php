<!DOCTYPE html>
<html>
    <head>
        <title>Teste PHP</title>
    </head>
    <body>
        
        <h1>Teste Array - PHP</h1>
        
        <?php
            
            $carro[0][0] = "GM";
            $carro[0][1] = "Chevete";
            $carro[0][2] = "Opala";
            $carro[0][3] = "Corsa";
        
            $carro[1][0] = "VW";
            $carro[1][1] = "Gol";
            $carro[1][2] = "Passat";
            $carro[1][3] = "Saveiro";
        
            echo $carro[1][3];
            echo ('<br>');
            echo end($carro [0]);
        
        
            var_dump($carro);
        
        
           
        
        
        ?>
        
    </body>
</html>