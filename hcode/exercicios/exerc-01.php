<?php
   

    function calculoimc($peso, $altura){

        $imc = $peso * $altura;
        return $imc; 

    }
 
    echo calculoimc(67, 1.75);

?>