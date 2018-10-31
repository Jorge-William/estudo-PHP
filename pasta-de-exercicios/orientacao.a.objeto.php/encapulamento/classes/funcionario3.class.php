<?php
class Funcionario
{
    private $_codigo;
    public $_nome;
    private $_nascimento;
    protected $_salario;

    public function SetSalario($par_salario){
        $this->_salario = $par_salario;
    }

    public function GetSalario(){
        return $this->_salario;
    }


}