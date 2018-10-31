<?php

    class Veiculo
    {
        var $rodas;
        var $capac_passag;
        var $capac_tanque;
        var $ignicao = 'desligado';

        function ligar(){ 
            if ($ignicao == 'ligado') {
                return $this->ignicao;
            } else {
                 echo 'nao ligado';
                 return $this->ignicao;
            }

        }

        function freiar(){
            echo 'Brake light';
        }

    }

    $moto = new Veiculo;
    echo $moto->ligar();


?>