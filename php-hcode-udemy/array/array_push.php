<!DOCTYPE html>
<html lang="pt">
    <heade>
        <meta charset="utf-8">
        <title>Teste Array</title>
    </heade>
    <body>
        
        <?php
        
            $pessoas = array();
        
            array_push($pessoas, array(
                'nome'=>'João',
                'idade'=>20
            ));
            
            array_push($pessoas, array(
                'nome'=>'Jorge','<br>',
                'idade'=>33
            ));
            
            //print_r($pessoas[0]['nome']);
            //print_r($pessoas[1]['nome']);
        
            
            $frutas = array('banana','laranja','manga');
            
            array_push($frutas, 'tangerina');

            //print_r($frutas); 

            $pessoas = array(0 =>'Jorge', 1 => 'Marcelo', 2 => 'Arildo', 3 => 'Joana', 4 => 'Juliana', 5 => 'Roberto'); 

            array_push($pessoas, 'Márcio','Julio');

            //print_r($pessoas);

            $carros = array();

            $num[0][0] = 112;
            $num[0][1] = 122;
            $num[1][0] = 223;
            $num[1][1] = 554;

            print_r($num[1][1]+$num[0][1]);
        ?>
    
    </body>
</html>