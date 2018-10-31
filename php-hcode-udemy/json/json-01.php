<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>JSON</title>
    </head>
    <body>
        
        <?php
            
            $pessoas = array();
        
            array_push($pessoas, array(
                'nome' => 'Joao',
                'idade' => 20
            ));
            
            array_push($pessoas, array(
                'nome' => 'Jorge',
                'idade' => 33
            ));
            
            
        
            echo json_encode($pessoas);
        
        ?>
    </body>
</html>