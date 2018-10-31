<?php

    class Conta
    {
        
        # -----------------------------Variáveis------------------------------------------

        protected $_nomeTitular;
        protected $_agenciaBanc;
        protected $_NumConta;
        protected  static $_saldoConta = 0;

        



        # -----------------------------Getters and setters--------------------------------

        
        public function getNome(){
            return $this->_nomeTitular;
        }

        public function setNome($nome_par){
            $this->_nomeTitular = $nome_par;
        }

        public function getAgencia(){
            return $this->_agencia;
        }

        public function setAgencia($agencia_par){
            $this->_agencia = $agencia_par;
        }

        public function getNumConta(){
            return $this->_NumConta;
        }
        
        public function setNumConta($numConta_par){
            $this->_NumConta = $numConta_par;
        }


        #----------------------------------Metodos------------------------------------------

        public function operSacar(){

        }

        public function operDepositar($deposito){
            if($deposito <= 0){
                echo 'Valor para deposito invalido!!!!';
            } else {
                self::$_saldoConta += $deposito;
            }
        }

        public function operConsul(){
            return self::$_saldoConta;
        }

    }