<?php

    class Carro
    {
        public $_modelo;

        public function setModelo($_setMod){
            $this->_modelo = $_setMod;
        }

        public function getModelo(){
            return $this->_modelo;
        }
    }



    class Automodelo extends Carro{
        protected $_nome;
        
        


    }
 
    
