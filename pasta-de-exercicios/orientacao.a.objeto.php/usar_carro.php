<?php

    include("carro.php");

    $car1 = new Carro;

    $car1->setModelo("Chevette");

    echo $car1->getModelo();

