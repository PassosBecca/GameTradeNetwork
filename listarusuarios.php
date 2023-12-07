<?php
    session_start(); // Mova a chamada para session_start() para o início do arquivo
    require_once "conexao.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body class="body-style">
    <div>
        <div class="header3">
            <h2>Listagem de Usuários</h2>
        </div>
        <div class="icon-box2">
            <a href="usuario.html">Novo Usuário</a><br>
            <?php
                require_once "conexao.php";
                $sql = "select * FROM usuarios";
                echo "<table><tr><th>ID</th><th>Nome</th><th>E-mail</th></tr>";
                $resultado = $conn->query($sql);
                foreach($resultado as $registro) {
                    echo "<tr><td>".$registro["id"]."</td><td>".
                    $registro["nome"]."</td><td>". $registro['email'] ;

                    if ($_SESSION['tipoacesso'] == 'Adm'){
                        echo
                       "</td><td><a href='editarusuario.php?id=".$registro["id"]."' >Editar</a>".
                       "</td><td><a href='excluirusuario.php?id=".$registro["id"]."'>Excluir</a>".
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