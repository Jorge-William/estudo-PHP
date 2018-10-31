<?php
    include_once('funcionario3.php');

    class Estagiario extends Funcionario
    {
        public function GetSalario(){
            return $this->_salario * 1.12;
        }
    }
    