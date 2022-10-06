<?php

// Pega parte do código que conecta no SGBD
require_once("../conecta/conecta.php");
// include_once(); Não gera erro fatal se não existir

// Dados do formulário HTML
$nome = $_POST["nome"];
$turno = $_POST["turno"];
$inicio = $_POST["inicio"];

/*
A função prepare() retorna um objeto
que irá juntar os dados do usuário com
o comando SQL
*/
$stmt = $db->prepare("  INSERT INTO 
                            alunos 
                                (nome, turno, inicio) 
                            VALUES
                                (:NOME, :TURNO, :INICIO)");

/*
A função bindParam() substitui as palavras-chave
(ex.: ":NOME") pelos valores, fazendo com que os
mesmos sejam seguros
*/
$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":TURNO", $turno);
$stmt->bindParam(":INICIO", $inicio);

/* Executa a query no SGBD */
$stmt->execute();

if($db->lastInsertId() != 0){
    echo "Registro de ID {$db->lastInsertId()} inserido na base de dados";
} else{
    echo "Erro ao inserir aluno na base de dados";
}