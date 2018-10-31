<?php

// $nome = 10;


// function quadrado($valor1,$valor2)
// {
//     $dobro = $valor1 * $valor2;

//     return $quadrado;
// }
// echo quadrado(2,2);


// Variaveis estaticas


// function variavelEstatica()
// {
//     $a = 0;

//     echo $a;

//     $a++;
// }

// echo variavelEstatica();
// echo "<br>";
// echo variavelEstatica();


function variavelEstatica2()
{
    global $a;
    static $a = 0;
    echo $a;
    $a++;
}

echo variavelEstatica2();
echo "<br>";
echo $a;
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
echo "<br>";
echo variavelEstatica2();
