<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//APENAS P/ FICAR MAIS FACIL O USO
$id = $_POST['id'] ?? 0;
//?? (operador de coalescência) quando não aparece o ID ele substitui por 0)

$id = preg_replace('/\D/', '', $id);

if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagou = true;

}else{

    $apagou = false;
}

include 'index.php';