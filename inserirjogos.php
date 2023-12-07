<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogos</title>
</head>
<body>
<?php
    require_once "conexao.php";//incluir a conexao (BD)
    //buscando as informações do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $plataforma_id = $_POST['plataforma_id'];
    $descricao = $_POST['descricao'];
    $estado = $_POST['estado'];
    $sql = "insert into jogos (nome, plataforma_id, descricao, estado)
    values ('$nome', '$plataforma_id', '$descricao','$estado')";
    //echo $sql;
    $conn ->exec($sql);
    echo "<p> Salvo com sucesso. </p>"
    ?>
</body>
</html>