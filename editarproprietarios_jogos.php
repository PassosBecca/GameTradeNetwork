<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles2.css">   
    <title>Editar Proprietario</title>
</head>
<body class="body-style4">
    <div>
        <div class="box2">
            <div class="form-group">
                <?php
                //passo 1: procurar o registro a ser editado
                require_once "conexao.php"; //conecto com o banco
                $id = $_GET['id']; //pego o id (PK) do registro a ser alterado
                $sql = "select * FROM proprietarios_jogos where id=".$id; //encontro o registro
                $resultado = $conn->query($sql);//executo a busca
                foreach($resultado as $registro) { //se encontrado, faça
                ?>
                <!-- exibindo o formulário preenchido -->
                    <form action="atualizarproprietarios_jogos.php" method="post">
                        <label for="id">Id:<?php echo $registro["id"]; ?></label>
                        <input type="hidden"  name="id" class="form-control"
                            value="<?php echo $registro["id"]; ?>"><br>
                        <label for="id">Proprietario ID:</label>
                        <input type="id" name="proprietario_id" class="form-control"
                            value="<?php echo $registro["proprietario_id"]; ?>"><br>
                        <label for="id">Jogo ID:</label>
                        <input type="id" name="jogo_id" class="form-control"
                            value="<?php echo $registro["jogo_id"]; ?>"><br>
                            <div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                <button type="button" class="btn btn-secondary">Cancelar</button>
                            </div>
                    </form>
                <?php
                }
                ?>
            </div>            
        </div>        
    </div>
</body>
</html>