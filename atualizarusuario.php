<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <?php
    require_once "conexao.php";//incluir a conexão (BD)
    //buscando as informações do formulário
    $id = $_POST["id"];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "update usuarios set nome='$nome', email='$email', senha='$senha' 
    where id=".$id;
    //echo $sql;
    $conn->exec($sql);
    echo "<p>Atualizado com sucesso.</p>";
    ?>
</body>
</html>