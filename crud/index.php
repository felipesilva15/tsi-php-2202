<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Turno</th>
        <th>Dt. Inicio</th>
    </tr>
    <?php

        require_once("../conecta/conecta.php");

        $stmt = $db->query("SELECT ID, NOME, TURNO, INICIO FROM ALUNOS");

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td>{$data['ID']}</td>
                <td>{$data['NOME']}</td>
                <td>{$data['TURNO']}</td>
                <td>{$data['INICIO']}</td>
            </tr>";
        }
    ?>
    </table>
</body>
</html>