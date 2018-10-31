<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>Controle de fluxo</title>
</head>

<body>
    <?php
            
            $idade = 111;
        
            if ($idade <= 13){
                echo "Crianca!!!";
            } elseif ($idade >= 14 && $idade <= 17) {
                echo "Adolecente!!";
            } elseif ($idade > 17 && $idade <= 64 ){
                echo "Adulto!!";
            } else {
                echo "Ansiao";
            }
                
        

        ?>

</body>

</html>
