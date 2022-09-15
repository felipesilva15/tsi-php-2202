<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="nomeUsuario" id="nome">
        <br>
        <label for="">Idade</label>
        <input type="number" name="idadeUsuario" id="idade">
        <br>
        <label for="">CPF</label>
        <input type="number" name="cpfUsuario" id="cpf">
        <br>
        <label for="">Período</label>
        <select name="periodoUsuario" id="periodo">
            <option value="Escolha">Escolha</option>
            <option value="Diurno">Diurno</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>