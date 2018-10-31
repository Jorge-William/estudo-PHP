<!DOCTYPE html>
<html>

<head>
    <title>Teste PHP</title>
</head>

<body>

    <h1>Teste Array - PHP</h1>

    <?php
           $num = array('1','2','3','4','5','6','7');
        
        
            foreach($num as $chave => $num){
                echo "$chave => $num <br> \n";
            }
        
        
        ?>

</body>

</html>
