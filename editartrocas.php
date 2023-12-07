<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles2.css">   
    <title>Editar Trocas</title>
</head>
<body class="body-style4">
    <div>
        <div class="box2">
            <div class="form-group">
                <?php
                //passo 1: procurar o registro a ser editado
                require_once "conexao.php"; //conecto com o banco
                $id = $_GET['id']; //pego o id (PK) do registro a ser alterado
                $sql = "select * FROM trocas where id=".$id; //encontro o registro
                $resultado = $conn->query($sql);//executo a busca
                foreach($resultado as $registro) { //se encontrado, faça
                ?>
                <!-- exibindo o formulário preenchido -->
                    <form action="atualizartrocas.php" method="post">
                        <label for="id">Id:<?php echo $registro["id"]; ?></label>
                        <input type="hidden" name="id" class="form-control"
                            value="<?php echo $registro["id"]; ?>"><br>

                        <label for="id">Usuário Origem ID:</label>
                        <input type="id" name="usuario_origem_id" class="form-control"
                            value="<?php echo $registro["usuario_origem_id"]; ?>"><br>

                        <label for="id">Usuário Destino ID:</label>
                        <input type="id" name="usuario_destino_id" class="form-control"
                            value="<?php echo $registro["usuario_destino_id"]; ?>"><br>

                        <label for="id">Jogo Oferecido ID:</label>
                        <input type="id" name="jogo_oferecido_id" class="form-control"
                            value="<?php echo $registro["jogo_oferecido_id"]; ?>"><br>   

                        <label for="id">Jogo Recebido ID:</label>
                        <input type="id" name="jogo_recebido_id" class="form-control"
                            value="<?php echo $registro["jogo_recebido_id"]; ?>"><br>   

                        <label for="date">Data de Troca:</label>
                        <input type="date" name="data_troca" class="form-control"
                            value="<?php echo $registro["data_troca"]; ?>"><br>  
                
                        <label for="text">Estado:</label>
                        <input type="text" name="estado" class="form-control"
                            value="<?php echo $registro["estado"]; ?>"><br>    
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