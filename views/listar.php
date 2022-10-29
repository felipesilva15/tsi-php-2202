<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="formIncluir.php"><button>Adicionar aluno</button></a>

<table border ='1'>
    <tr>
            <td> ID </td>
            <td> Nome</td>
            <td> Turno</td>
            <td> Início</td>
            <td> Ações</td>
    </tr>

    <?php
    if (isset($gravou)){

        if ( !$gravou){
            echo 'Erro ao tentar gravar aluno!';

        }else{
            echo 'Aluno gravado com sucesso';
        }

    
    foreach($alunos as $aluno){

        echo " <tr>
                    <td>{$aluno['id']}</td>
                    <td>{$aluno['nome']}</td>
                    <td>{$aluno['turno']}</td>
                    <td>{$aluno['inicio']}</td>                              
                    ";        

    };
}
    ?>




</table>
    
</body>
</html>