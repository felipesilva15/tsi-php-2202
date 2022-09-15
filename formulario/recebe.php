<?php

echo "Seja bem vindo {$_POST["nomeUsuario"]}<br><br>";
echo "Você tem {$_POST["idadeUsuario"]} anos. CPF: {$_POST["cpfUsuario"]}<br>";
echo "Você estuda no período {$_POST["periodoUsuario"]}";

$arquivo = fopen("alunos.csv", "a");
fwrite($arquivo, "{$_POST["nomeUsuario"]},{$_POST["idadeUsuario"]},{$_POST["cpfUsuario"]},{$_POST["periodoUsuario"]}\r\n");
fclose($arquivo);