<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
    <style type="text/css">
        /* Adicione aqui seu CSS para estilizar o painel de administração */
        
        
        .container {
            width: 90%;
            margin: auto;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px ;
            text-align: center;
        }
        nav {
            margin-top: 20px;
        }
        nav ul {
            list-style-type: none;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
        }
    
        .rodape{
            background-image: linear-gradient(75deg ,#c50c0c, #0c3199) ;
            color: white;
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            text-align: center;
        }
        .header4{
            background-image: linear-gradient(50deg ,#c50c0cd5, #0c3199) ;
            color: white;
            width: 100%;
            padding: 75px;
            text-align: center;
            justify-self: top;
            align-items: center;
            font-size: 30px;
            border-radius: 3,5rem;
        }
    </style>
</head>
<body class="body-style3">
    <div>
        <div class="header4">
            <h1>Painel de Administração </h1>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="Home.html">Nossa Home</a></li><br>
                    <li><a href="login.php">Faça seu Login</a></li><br>
                    <li><a href="usuario.html">Efetue o seu Cadastro</a></li><br>
                </ul>
            </nav>
        </div>
        <div class="box2">
            
           
            
            <div >
                
                <h2>Painel Administrativo e Listagens</h2>
                <a href="listarusuarios.php">Usuários</a><br>
                <a href="listarplataforma.php">Plataformas</a><br>
                <a href="listarjogos.php">Jogos</a><br>
                <a href="listarproprietariosjogos.php">Proprietários</a><br>
                <a href="listartrocas.php">Trocas</a>
            </div>
            <div>
                <h2>Ações e Serviços</h2>
                
                <a href="jogos.html">Jogos Inserir</a><br>
                <a href="plataforma.html">Plataformas Inserir</a><br>
                <a href="trocas.html">Trocas Acessos / Inserção</a><br>
                <a href="proprietarios_jogos.html">Proprietários dos Jogos</a> <br>        
            </div>
        
        </div>
    
        <div class="rodape">
            <p>&copy; 2023 GameTradeNetwork . </p>
        </div>
    </div>
  
</body>
</html>
