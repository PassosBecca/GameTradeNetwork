<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Plataformas</title>
</head>
<body>
<?php
    require_once "conexao.php";//incluir a conexao (BD)
    //buscando as informações do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sql = "insert into plataforma (id, nome)
    values ('$id', '$nome')";
    //echo $sql;
    $conn ->exec($sql);
    echo "<p> Salvo com sucesso. </p>"
    ?>
</body>
</html>