<?php

// $ts = strtotime("+1 day"); // adiciona mais um dia
 

// echo date("l, d/m/Y", $ts); // imprime a data atual e recebe o parametro da variavel $ts





$maisUmDia = strtotime("+1 day");

echo date('l, d/m/Y', $maisUmDia);

?>