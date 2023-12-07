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
    $icone_excuir = 'https://t3.ftcdn.net/jpg/06/82/09/98/240_F_682099840_GXsiiTEmGKjp0NvcpqLGST8OcMu1G1bS.jpg';
    $sql = "delete from jogos where id=".$id;
    //echo $sql;
    $conn->exec($sql);
    echo "<p>Excluído com sucesso.</p>";
    ?>
</body>
</html>