<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Jogos</title>
</head>
<body>
    <?php
    require_once "conexao.php";//incluir a conexão (BD)
    //buscando as informações da listagem
    $id = $_GET['id'];
    $sql = "delete from plataforma where id=".$id;
    //echo $sql;
    $conn->exec($sql);
    echo "<p>Excluído com sucesso.</p>";
    ?>
</body>
</html>