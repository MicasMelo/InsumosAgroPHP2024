<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <link rel="icon" href="/gestaosemear/IMG/plantaikon.png">
    <style>
        .margin {
            justify-content: center; align-items: center; text-align: center;
            max-width: 400px; width: 100%;
            padding: 40px 30px; margin: 40px 10px;
            border-radius: 5px;
            background-color: #f5f1e3;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); }
        h1 { font-family: 'Roboto'; font-weight: 700; }
        .btn-floating, button { background-color: #2e4d23 !important; color: #f5f1e3 !important; }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <!-- Inclusão do jQuery-->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    
    <title>Inserir Cliente</title>
</head>

<body>
<?php include_once '../template.php'?>
<br><br>    
<div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center"><h1>Cadastrar Cliente</h1></div>
        <div class="center row">
            <form action="insCliente.php" method="POST" class="col s12 center row" id="cliente">
                <div class="input-field col s7">
                    <input id="nome" name="txtNome" type="text" class="validate" required minlength="2">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s7">
                    <input placeholder="(xx)xxxxx-xxxx ou e-mail" id="contato" name="txtContato" type="text" class="validate">
                    <label for="contato">Contato</label>
                </div>
                <div class="input-field col s7">
                    <input id="endereco" name="txtEndereco" type="text" class="validate">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="brown-lighten-5 col s12">
                    <div class="center">
                    <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarCliente.php'">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>