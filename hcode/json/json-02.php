<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>JSON</title>
    </head>
    <body>
        
        <?php
            
            $json = '[{"nome":"Joao","idade":20},{"nome":"Jorge","idade":33}]';
            
            $data = json_decode($json, true);
            
            var_dump($data);
        
        ?>
    </body>
</html>