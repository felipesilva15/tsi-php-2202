<?php

require_once '../BancoDeDados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');



while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
        $alunos[] = $registro;
}


include "view/listar.php";


   // Fetch Assoc serve para serve para trazer apenas os números alfa numéricos

