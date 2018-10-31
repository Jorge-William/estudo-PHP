<?php

    include_once('conta.class.php');

    $Jorge = new Conta;
    $Jorge->operDepositar(1000);
    $Jorge->operDepositar(-1);
    echo $Jorge->operConsul();