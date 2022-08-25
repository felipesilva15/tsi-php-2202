<?php

$nome = "Felipe Silva";

// echo "Olá $nome!";

// Comentário de linha 

# Comentário de linha 

/* 
    Comentário 
    de
    bloco
*/

// Documentação do PHP fica em: https://www.php.net

// FOR
echo "<b>For</b><br>";
for ($i=0; $i < 10; $i++) { 
    echo "$nome<br>";
}

// WHILE
echo "<br><b>While</b><br>";
$i = 0;

while ($i < 10){
    echo "$nome<br>";
    
    $i++;
}

// DO WHILE
echo "<br><b>Do while</b><br>";
$i = 0;

do {
    echo "$nome<br>";
    
    $i++;
} while ($i < 10);

// IF
echo "<br><b>If</b><br>";
if (5 > 10){
    echo "5 é maior que 10";
}else{
    echo "5 não é maior que 10";
}

//SWITCH
echo "<br><br><b>Switch case</b><br>";
$dow = 3;
switch ($dow) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;

    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Número inválido";
        break;
}