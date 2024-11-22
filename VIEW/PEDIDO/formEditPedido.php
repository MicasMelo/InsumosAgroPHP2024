<?php
    include_once 'C:\xampp\htdocs\gestaosemear\MODEL\pedido.php';
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php';
    $id = $_GET['id'];

    $bllPdd = new BLL\pedido();
    $pedido = $bllPdd->SelectID($id);
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
    
    <!--<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

    <title>Editar Pedido</title>
</head>

<body>
<?php include_once '../template.php'; ?>
    <br><br>
    <div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center">
            <h1>Editar Pedido</h1>
        </div>
        <div class="center row">
            <form action="editPedido.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <label for="id" class="black-text bold">ID: <?php echo $pedido->getID() ?></label>
                    <input type="hidden" name="txtID" value="<?php echo $id;?>">
                </div>
                <div class="input-field col s7">
                    <label for="idProduto" class="black-text bold">ID Produto: <?php echo $pedido->getIDProduto() ?></label>
                    <input type="hidden" name="txtIdProduto" value="<?php echo $pedido->getIDProduto();?>">
                </div>
                <div class="input-field col s7">
                    <label for="idCliente" class="black-text bold">ID Cliente: <?php echo $pedido->getIDCliente() ?></label><br>
                    <input type="hidden" name="txtIdCliente" value="<?php echo $pedido->getIDCliente();?>">
                </div>
                <div class="input-field col s7">
                    <label for="data" class="black-text bold">Data do Pedido <br>
                        <?php echo date('d/m/Y', strtotime($pedido->getData())); ?></label><br><br><br>
                    <input type="hidden" name="txtData" value="<?php echo $pedido->getData();?>">
                </div>
                <div class="input-field col s7">
                    <input id="quantidade" name="txtQuantidade" type="number"
                        class="validate" value="<?php echo $pedido->getQuantidade();?>">
                    <label for="quantidade">Quantidade</label>
                </div>
                <div class="center brown-lighten-5 col s12">
                    <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarPedido.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>