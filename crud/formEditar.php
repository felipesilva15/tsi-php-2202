<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class='container'>
        <form action="atualizar.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $aluno["nome"] ?>">
            <br><br>
            <label for="turno">Turno: </label>
            <select name="turno" id="turno">
                <option <?php echo $aluno["turno"] == "" ? "selected" : "" ?> value="">Escolha</option>
                <option <?php echo $aluno["turno"] == "matutino" ? "selected" : "" ?> value="matutino">Matutino</option>
                <option <?php echo $aluno["turno"] == "vespertino" ? "selected" : "" ?> value="vespertino">Vespertino</option>
                <option <?php echo $aluno["turno"] == "noturno" ? "selected" : "" ?> value="noturno">Noturno</option>
            </select>
            <br><br>
            <label for="inicio">Início</label>
            <input type="date" name="inicio" id="inicio" value="<?php echo $aluno["inicio"] ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $aluno["id"] ?>">
            <br><br>
            <input class="btn" type="submit" value="Gravar">
        </form> 
    </div>   
</body>
</html>