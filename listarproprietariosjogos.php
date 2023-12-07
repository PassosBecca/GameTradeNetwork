<?php
    session_start(); // Mova a chamada para session_start() para o início do arquivo
    require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles2.css"> 
    <link rel="stylesheet" type="text/css" href="styles.php"> 
    <title>Lista de Proprietários </title>
</head>
<body class="body-style">
    <div>
        <div class="header3">
            <h2>Listagem de Proprietários </h2>
        </div>
        <div class="icon-box2">
            <a href="proprietarios_jogos.html">Novo Proprietário</a><br>
            <?php
                require_once "conexao.php";
                $sql = "select proprietarios_jogos.*,usuarios.nome, jogos.nome as jogo 
                from proprietarios_jogos, usuarios , jogos
                where proprietarios_jogos.proprietario_id  = usuarios.id
                and proprietarios_jogos.jogo_id = jogos.id  ";
                echo "<table><tr><th>ID</th>
                <th>Nome</th>
                <th>Jogo</th></tr>";
                $resultado = $conn-> query($sql);
                foreach($resultado as $registro) {
                    echo "<tr><td>".$registro["id"]."</td><td>".
                    $registro["nome"]. "</td><td>". $registro["jogo"];

                    if ($_SESSION['tipoacesso'] == 'Adm'){
                        echo
                       "</td><td><a href='editarproprietarios_jogos.php?id=".$registro["id"]."' >Editar</a>".
                       "</td><td><a href='excluirproprietarios_jogos.php?id=".$registro["id"]."'>Excluir</a>".
                       "</td><tr>";                         
                    } 

                    if ($_SESSION['tipoacesso'] == "user") {
                      
                       
                    }
                   
                }
                echo "</table>";
            ?>
        </div>
    </div>
</body>
</html>