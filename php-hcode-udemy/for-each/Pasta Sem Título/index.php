<!DOCTYPE HTML>
<html lang="pt">
    <head>
        <meta charset="utf-8">   
        <title>Teste foreach</title>
    </head>    
    <body>
        
        <?php
            $meses = array(
                "Janeiro", "Fevereiro", "Marco",
                "Abril", "Maio", "Junho",
                "Julho", "Agosto", "Setembro",
                "Outubro","Novembro","Dezembro"
            );
            
        
        
            foreach($meses as $index => $mes){
                echo "Indice ".$index."<br>";
                echo "O mes e: ". $mes. "<br><br>";
            }
        
        
        ?>
    </body>
</html>