<?php

//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//APENAS P/ FICAR MAIS FACIL O USO
$id = $_POST['id'] ?? 0;
//?? (operador de coalescência) quando não aparece o ID ele substitui por 0)


$stmt  = $bd->prepare('SELECT id, nome, turno, inicio
                        FROM alunos
                        WHERE id = :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

//P R I M E I R O
//MOstrar um formulário HTML para o usuário com 
//os dados do aluno selecionado para ser editado

//S E G U N D O
//Ao clicar em Gravar ou Atualizar no Formulário
//fazer o Update no Banco e voltar para a Index com 
//uma mensagem de erro ou sucesso
var_dump($aluno);