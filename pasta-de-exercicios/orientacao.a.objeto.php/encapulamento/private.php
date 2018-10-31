<?php
    
    include_once('classes/funcionario2.class.php');

    $pedro = new Funcionario2;

    $pedro->SetSalario(100);
    echo $pedro->GetSalario();
