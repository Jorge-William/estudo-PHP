<?php

    $pessoa = array(
        'nome' => 'joão',
        'idade' => 20
    );

    print_r($pessoa);

    echo '<br />';
    echo '<br />';

    foreach($pessoa as &$value){
        
        if(gettype($value) === 'integer') $value += 10;

        echo $value.'<br />';
    }
    echo '<br />';



    print_r($pessoa);