<?php
//buscamos o dado que conecta ao sgdb
require_once '../BancoDeDados/conecta.php';
//include_once não gera erro fatal se não existir SGDB


//dados proviniente do formulário HTML
$nome = $_POST ['nome'];
$periodo = $_POST ['turno'];
$inicio = $_POST ['inicio'];


$consulta = 
        $bd-> prepare('     INSERT INTO alunos
                        (nome, turno, inicio)
                        VALUES
                        (:nome, :turno, :inicio)');
/*
Oq ocorre na linha 13? 

A função $bd->prepare() responde à  
outra variável (objeto, no caso $consulta),
 essa outra variável consegue juntar os dados do usuário com a consulta SQL 
*/


/*
A função $consulta->bindParam() substitui
os rótulos (ex: ":nome") pelos dados 
inseguros
*/

$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':inicio', $inicio);
//a função $consulta->bindParam() substitui os rotulos(':nome') pelos dados inseguros

if( $consulta->execute() ){
    $gravou = true;
}else{
    $gravou = false;
}
// finalmente executamos a consulta no SGDB


include 'index.php';



