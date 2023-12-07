<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Cadastro</title>
</head>
<body>
<?php
    require_once "conexao.php";//incluir a conexão (BD)
    //buscando as informações do formulário
    $id = $_POST["id"];
    $nome = $_POST['nome'];

    $sql = "update jogos set nome='$nome'
    where id=".$id;
    //echo $sql;
    $conn->exec($sql);
    echo "<p>Atualizado com sucesso.</p>";
    ?> 
</body>
</html>