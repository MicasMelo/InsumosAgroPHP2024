<?php
    include_once 'C:\xampp\htdocs\gestaosemear\MODEL\cliente.php';
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\cliente.php';
    $id = $_GET['id'];

    $bllCli = new BLL\cliente();
    $cliente = $bllCli->SelectID($id);
?>

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

    <title>Editar Cliente</title>
</head>

<body>
<?php include_once '../template.php'; ?>
    <br><br>
    <div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center">
            <h1>Editar Cliente</h1>
        </div>
        <div class="center row">
            <form action="editCliente.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <input type="hidden" name="txtID" value="<?php echo $id;?>">
                </div>
                <div class="input-field col s7">
                    <input id="nome" name="txtNome" type="text" required minlength="2"
                        class="validate" value="<?php echo $cliente->getNome();?>">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s7">
                    <input placeholder="Exemplo: (xx)xxxxx-xxxx ou e-mail" id="contato" name="txtContato" type="tel" 
                        class="validate" value="<?php echo $cliente->getContato();?>">
                    <label for="contato">Contato</label>
                </div>
                <div class="input-field col s7">
                    <input id="endereco" name="txtEndereco" type="text"
                        class="validate" value="<?php echo $cliente->getEndereco();?>">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="center brown-lighten-5 col s12">
                    <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarCliente.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>