<?php

$diaSemana = [
    0=>"Domingo",
    1=>"Segunda",
    2=>"Terça-feira",
    3=>"Quarta-feira",
    4=>"Quinta-feira",
    5=>"Sexta-feira",
    6=>"Sábado"
];

// var_dump($diaSemana);

$hoje = date("w");
$date = date("d/m/Y");

// echo "Hoje é dia $date - {$diaSemana[$hoje]}";

echo "<br><br>";

$alunos = [
    [
        "matricula"=>16545,
        "nome"=>"Bono",
        "semestre"=>2,
        "anoInicio"=>2022
    ],
    [
        "matricula"=>25485,
        "nome"=>"Mario",
        "semestre"=>3,
        "anoInicio"=>2021
    ],
    [
        "matricula"=>45625,
        "nome"=>"Jonas",
        "semestre"=>1,
        "anoInicio"=>2022
    ]
];

// var_dump($alunos);

// echo "<br><br>";

// // Monta array de cabeçalho
// $cabecalho = [];

// foreach ($alunos[0] as $key => $value) {
//     array_push($cabecalho, $key);
// }

// // Cria tag da tabela
// $html = "<table border = 1>";

// // Cria o cabeçalho
// $html .= "<tr>" ;

// for ($i=0; $i < count($cabecalho); $i++){
//     $html .= "<th>".ucwords($cabecalho[$i])."</th>";
// }

// $html .= "</tr>" ;

// // Cria as linhas dos dados
// for ($i=0; $i < count($alunos); $i++){
//     $aluno = $alunos[$i];

//     $html .= "<tr>";

//     for ($a=0; $a < count($aluno); $a++){
//         $html .= "<td>{$aluno[$cabecalho[$a]]}</td>";
//     }

//     $html .= "</tr>";
// }

// $html .= "</table>";

$html = "<table>";

$html .= "<tr>" ;
$html .= "<td>Matricula</td>";
$html .= "<td>Nome</td>";
$html .= "<td>Semestre</td>";
$html .= "</tr>" ;

foreach ($alunos as $aluno) {
    $html .= "<tr>";

    $html .= "<td>{$aluno["matricula"]}</td>";
    $html .= "<td>{$aluno["nome"]}</td>";
    $html .= "<td>{$aluno["semestre"]}</td>";

    $html .= "</tr>";
}

$html .= "</table>";

echo $html;