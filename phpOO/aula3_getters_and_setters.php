<?php

class Login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($a){
        $email = filter_var($a, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($e){
        $this->senha = $e;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso!!";
         else :
            echo "Dados inválidos!!!";
         endif;

    }
}


$logar = new Login();
$logar->setEmail("teste()/@teste.com");
$logar->setSenha("123456");
echo $logar->getEmail();
$logar->Logar();
echo $logar->getSenha();