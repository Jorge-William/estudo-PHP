<?php
    include ('classes/funcionario3.class.php');
    include ('classes/estagiario.class.php');

    $jorge = new Estagiario;

    $jorge->SetSalario(200);

    echo 'O salario de Jorge é: '.$jorge->GetSalario();