<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
    <title>Validar Login</title>
</head>
<body class="body-style3">
    <div class="box2">
            <?php
            require_once "conexao.php";
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = "select * FROM usuarios where email='".$email.
            "' and senha='". $senha."'";
            
            $resultado = $conn->query ($sql);
            $linhas = $resultado->rowCount();
            if($linhas>0)  {
                echo "Acesso Concedido <br>";
                foreach($resultado as $registro) {
                    echo"Você esta conectado com acesso ".$registro['email'] . ".<br>";
                    $acesso = $registro['acesso'];
                    session_start();
                    $_SESSION['usuario'] = $registro['email'];
                    $_SESSION['tipoacesso'] = $registro['acesso'];
                    echo $_SESSION['tipoacesso'];
                    if($acesso=="user"){
                        echo"(user)<br>";
                        
                        echo"<a href='Home.html'>Acesse nossa Home Page</a><br>";
                        
                    }
                    if($acesso=="Adm"){
                        echo"(Adm)<br>";
                        echo"<a href='index.php'>Acesse o Painel de Controle</a><br>";
                       
                        

                    }
                }
                            
            }
            else
            echo "Acesso Negado"
        ?>
    </div>
    
</body>
</html>