
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
    <title>Lista de Jogos</title>   
</head>
<body class="body-style">
    <div>
        <div class="header3">
            <h2>Listagem dos Jogos</h2>
        </div>        
        <div class="icon-box2">
            <a href="jogos.html">Novo Jogo</a>
            <p>Jogos :</p>
            <?php
            echo $_SESSION['tipoacesso'];
                $sql = "SELECT jogos.*, plataforma.nome AS plat FROM jogos, plataforma WHERE jogos.plataforma_id = plataforma.id";
                echo "<table><tr><th>ID</th>
                <th>Nome</th>
                <th>Plataforma ID</th>
                <th>Descrição</th>
                <th>Estado</th></tr>";
                $resultado = $conn->query($sql);
                foreach ($resultado as $registro) {
                    echo "<tr><td>".$registro["id"]."</td><td>".
                    $registro["nome"]. "</td><td>". $registro["plat"]."</td><td>". 
                    $registro["descricao"]."</td><td>".$registro["estado"]."</td><td>";

                    if ($_SESSION['tipoacesso'] == 'Adm'){
                        echo
                       "</td><td><a href='editarjogos.php?id=".$registro["id"]."' >Editar</a>".
                       "</td><td><a href='excluirjogos.php?id=".$registro["id"]."'>Excluir</a>".
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
