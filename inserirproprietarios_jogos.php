<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Proprietário Jogos</title>
</head>
<body>
<?php
    require_once "conexao.php";//incluir a conexao (BD)
    //buscando as informações do formulário
    $id = $_POST['id'];
    $proprietario_id = $_POST['proprietario_id'];
    $jogo_id = $_POST['jogo_id'];

    $sql = "insert into proprietarios_jogos (proprietario_id, jogo_id)
    values ('$proprietario_id', '$jogo_id')";
    //echo $sql;
    $conn ->exec($sql);
    echo "<p> Salvo com sucesso. </p>"
    ?>
</body>
</html>