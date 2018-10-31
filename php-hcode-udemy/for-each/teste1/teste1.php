<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Teste de foreach</title>
    </head>
    <body>
        <?php
            $diasDaSemana = array ("Segunda","Terça","Quarta","Quinta","Sexta","Sábado","Domingo");
            
            $diaDoMes = array('1','2','3');
        
            foreach($diasDaSemana as $diaDoMes => $valor){
                
                echo $diaDoMes." - ".$valor."<br>";
                
                
            }
        
        
        
        
        ?>    
    </body>
</html>