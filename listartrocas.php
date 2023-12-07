<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Trocas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="styles.php"> 
</head>
<body class="body-style">
    <div>
        <div class="header3">
            <h2>Listagem de Trocas</h2>
        </div>
        <div class="icon-box2">
            <a href="trocas.html">Trocas</a>
            <?php
                require_once "conexao.php";
                $sql = "SELECT trocas.*, origem.nome AS nome_origem, destino.nome AS nome_destino, origemjg.nome as jgname,destinojg.nome as dest
                FROM trocas, usuarios AS origem, usuarios AS destino, jogos as origemjg, jogos as destinojg
                WHERE trocas.usuario_origem_id = origem.id
                AND trocas.usuario_destino_id = destino.id
                and jogo_oferecido_id = origemjg.id
                and jogo_recebido_id = destinojg.id";
                echo "<table><tr><th>ID</th>
                <th>Usuário Origem </th>
                <th>Usuário Destino </th>
                <th>Jogo Oferecido </th>
                <th>Jogo Recebido </th>
                <th><th>Data Troca</th>
                <th>Estado</th></tr>";
                $resultado = $conn-> query($sql);
                foreach($resultado as $registro) {
                    echo "<tr><td>".$registro["id"]."</td><td>".
                    $registro["nome_origem"]. "</td><td>". $registro["nome_destino"]."</td><td>". 
                    $registro["jgname"]."</td><td>".$registro["dest"]. "<td/><td>". 
                    $registro["data_troca"]. "</td><td>" . $registro["estado"].
                    "</td><td><a href='editartrocas.php?id=".$registro["id"]."'>Editar</a>".
                    "</td><td><a href='excluirtrocas.php?id=".$registro["id"]."'>Excluir</a>".
                    "</td><tr>";
                } 
                echo "</table>";
            ?>
        </div>          
    </div>     
</body>
</html>