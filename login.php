<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(50deg ,#8b0ae0,#6f31e0,#31b7f5,#6f31e0,#9800fd);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .icon-box {
            background-color: #b9c5ecad;
            border: 1px solid #0e0c99;
            padding: 1rem;
            height: 5%;
            width: 20%;
            box-shadow: 2.5rem 1.75rem 0.5rem rgba(34, 34, 34, 0.233);
            border-radius: 5px;
        }
        .parent{
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
        /* Personalizar a cor do botão de envio */
    .btn-primary {
        background-color: #3498db; /* Azul */
        border-color: #2980b9; /* Azul mais escuro para a borda */
    }

    /* Personalizar a cor do botão de cancelamento */
    .btn-secondary {
        background-color: #c92525; /* Verde */
        border-color: #0c0c0c; /* Verde mais escuro para a borda */
    }
    .form-control{
        border: 2px solid #0e0c99; /* Cor da borda azul */
        border-radius: 5px; /* Raio da borda */
    }
    </style>
<body>
<div class="icon-box ">
        <!-- Aqui você pode adicionar ícones ou conteúdo fora do formulário -->
        <!-- Exemplo com um ícone de usuário -->
        <div class="text-center">
            <i class="fas fa-user fa-3x"></i>
        </div>
    <form name="form1" action="validarlogin.php" method="post">
    <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required6>
            </div>
            <button type="submit" class="btn btn-primary">Efetuar</button>
            <button type="button" class="btn btn-secondary">Cancelar</button>
    </form>
    </div>

    <!-- Adicione o link para o FontAwesome para usar ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Adicione o script do Bootstrap (jQuery e Popper.js são necessários) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>