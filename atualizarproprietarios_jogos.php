<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Proprietarios</title>
</head>
<body>
    <?php
    require_once "conexao.php";//incluir a conexão (BD)
    //buscando as informações do formulário
    $id = $_POST["id"];
    $proprietario_id= $_POST['proprietario_id'];
    $jogo_id = $_POST['jogo_id'];
    $sql = "update proprietarios_jogos set proprietario_id='$proprietario_id', jogo_id='$jogo_id' 
    where id=".$id;
    //echo $sql;
    $conn->exec($sql);
    echo "<p>Atualizado com sucesso.</p>";
    ?>
</body>
</html>