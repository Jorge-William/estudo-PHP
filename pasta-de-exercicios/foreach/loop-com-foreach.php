<?php

    for($a = 0; $a <= 20; $a++){
        echo $a.'<br>';
    }


    foreach(range(0,20) as $posicao)
    {
        print('Posicao: '.$posicao.'<br>');
    }


?>