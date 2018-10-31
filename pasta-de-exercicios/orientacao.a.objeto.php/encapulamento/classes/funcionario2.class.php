<?php

class Funcionario2
{
    private $_codigo;
    public $_nome;
    private $_nascimento;
    private $_salario;

    // metodo SetSalário atribue o 
    // parametro $_sal a propriedade $_salario

    function SetSalario($_sal)
    {
        if (is_numeric($_sal) and ($_sal > 0)) {
            $this->_salario = $_sal;
            echo 'O salario é: R$ ';
        } else {
            echo("Esse valor é invalido.");
        }
    }



    function GetSalario()
    {
        return $this->_salario;
    }

}