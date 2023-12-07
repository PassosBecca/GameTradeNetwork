<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Trocas</title>
</head>
<body>
<?php
    require_once "conexao.php";//incluir a conexão (BD)
    //buscando as informações do formulário
    $id = $_POST["id"];
    $usuario_origem_id = $_POST['usuario_origem_id'];
    $usuario_destino_id = $_POST['usuario_destino_id'];
    $jogo_oferecido_id = $_POST['jogo_oferecido_id'];
    $jogo_recebido_id = $_POST['jogo_recebido_id'];
    $data_troca = $_POST['data_troca'];
    $estado = $_POST['estado'];
    $sql = "insert into trocas (usuario_origem_id,usuario_destino_id,jogo_oferecido_id,jogo_recebido_id,data_troca,estado) 
    values ('$usuario_origem_id','$usuario_destino_id','$jogo_oferecido_id','$jogo_recebido_id','$data_troca','$estado')";
    //echo $sql;
    $conn ->exec($sql);
    echo "<p>Salvo com sucesso.</p>";
    ?>
</body>
</html>