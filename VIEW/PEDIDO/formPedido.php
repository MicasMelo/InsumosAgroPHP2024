<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <link rel="icon" href="/gestaosemear/IMG/plantaikon.png">
    <style>
        .margin {
            justify-content: center; align-items: center; text-align: center;
            max-width: 400px; width: 100%;
            padding: 20px 30px; margin: 40px 10px;
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
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../JS/init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs/dayjs.min.js"></script>
    <script>
        function calcular(id){
                location.href = "../../CONTROLLER/calculaTotal.php?id=" + id;}

        window.onload = function() {
            const hoje = dayjs().format('YYYY-MM-DD');
            document.getElementById('dataPedido').value = hoje;}; 
    </script>
    <?php include_once 'C:\xampp\htdocs\gestaosemear\BLL\cliente.php' ?>
    <?php include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php' ?>

    <title>Fazer Pedido</title>
</head>

<body>
<?php include_once '../template.php'?>
<br><br>    
<div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center"><h1>Realizar Pedido</h1></div>
        <div class="center row">
            <form action="insPedido.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <select name="selectIdProduto">
                        <option value="" disabled selected>Selecione o Produto</option>
                        <?php
                            $bllPdd = new BLL\produto();
                            $listaPdd = $bllPdd->Select();
                            foreach ($listaPdd as $produto){?>
                                <option value="<?php echo $produto->getID();?>">
                                    <?php echo $produto->getDescricao();?></option>
                            <?php } ?>
                    </select>
                    <label>Produto</label>
                </div>
                <div class="input-field col s7">
                    <select name="selectIdCliente">
                        <option value="" disabled selected>Selecione o cliente</option>
                        <?php
                            $bllCli = new BLL\cliente();
                            $listaCli = $bllCli->Select();
                            foreach ($listaCli as $cliente){?>
                                <option value="<?php echo $cliente->getID();?>">
                                    <?php echo $cliente->getNome();?></option>
                            <?php } ?>
                    </select>
                    <label>Cliente</label>
                </div><br>
                <div class="input-field col s7">
                    <input id="dataPedido" name="txtData" type="date" readonly>
                    <label for="data">Data do Pedido</label>
                </div>
                <div class="input-field col s7">
                    <input id="quantidade" name="txtQuantidade" type="number" class="validate">
                    <label for="quantidade">Quantidade</label>
                </div>
                <input type="hidden" name="txtStatus" value="1">
                <div class="brown-lighten-5 col s12">
                    <div class="center">
                    <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarPedido.php'">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>