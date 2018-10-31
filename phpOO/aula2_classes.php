<?php
    class Pessoa{
        public $nome;
        public $idade;

        public function Falar(){
            echo $this ->nome." de ".$this->idade." anos "." acabou de falar";
        }
    }

$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 30;

$rodrigo->Falar();

var_dump($rodrigo);