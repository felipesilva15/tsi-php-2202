<?php

//Buscamos o código que conecta no SGBD
require_once '..//bancoDeDados/conecta.php';

//
$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');


    echo '<table border="1">
            <tr>
               <td>ID</td>
               <td>Nome</td>
               <td>Turno</td>
               <td>Inicio</td>
               <td>Ações</td>
            </tr>';

//FETCH_ASSOC serve para trazer somente os índices alfa-numericos do Vetor
while( $registro = $stmt->fetch(PDO :: FETCH_ASSOC) ){
    
    echo " <tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>{$registro['turno']}</td>
                <td>{$registro['inicio']}</td>
            </tr>";

}
echo '</table>';