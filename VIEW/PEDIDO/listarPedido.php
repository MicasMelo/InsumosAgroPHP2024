<?php 
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php';
    use \BLL\pedido;

    $bllPedido = new \BLL\pedido;
    $listaPedido = $bllPedido->Select(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="/gestaosemear/IMG/plantaikon.png">
    <style>
        .margin {
            justify-content: center; align-items: center; text-align: center;
            max-width: 400px; width: 100%;
            padding: 40px 30px; margin: 50px 10px;
            border-radius: 5px;
            background-color: #f5f1e3;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); }
        h1 { font-family: 'Roboto'; font-weight: 700; }
        .btn-floating, button { background-color: #2e4d23 !important; color: #f5f1e3 !important; }
    </style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
        function cancelar(id){
            if(confirm('Cancelar Pedido ' + id + '?')){
                location.href = 'cancelaPedido.php?id=' + id;}}
        function finalizar(id){
            if(confirm('Finalizar Pedido ' + id + '?')){
                location.href = '../../CONTROLLER/finalizaPedido.php?id=' + id;}}
        function aceitar(id){
            if(confirm('Aceitar Pedido ' + id + '?')){
                location.href = '../../CONTROLLER/calculaTotal.php?id=' + id;}}
        function remover(id){
            if(confirm('Excluir Pedido ' + id + '?')){
                location.href = 'delPedido.php?id=' + id;}}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
<?php include_once '../template.php'; ?>
    <br><br>
    <div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center">
            <h1>Pedidos Realizados</h1>
            <div class="row center-align">
                <div class="col offset-s3 s10">
                <form action="../../CONTROLLER/agrupaPedido.php" method="GET" id="agrupar" class="col s10">
                    <div class="input-field col s8">
                        <input type="text" placeholder="Pedidos por cliente (ID)" class="form-control col s10" id="txtAgrupa" name="cliente">
                        <button class="btn-floating btn-medium waves-effect waves-light" type="submit">
                            <i class="material-icons">search</i></button>
                    </div>
                </form>
                </div>
            </div>
            <table>
                <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Cliente</th>
                <th>Data do Pedido</th>
                <th>Quantidade</th>
                <th>Total (R$)</th>
                <th>Status</th>
                <th>Operações</th>
                <th><a class="btn-floating btn-medium waves-effect waves-light">
                    <i class="material-icons" onclick="javascript:location.href='formPedido.php'">add</i></a></th>
                <th><a class="btn-floating btn-medium waves-effect waves-light" 
                    href="../../CONTROLLER/vendasMensais.php?">
                    <i class="material-icons">account_balance</i></a></th>
                </tr>

            <?php foreach ($listaPedido as $pedido) {?>
                <tr>
                <td><?php echo $pedido->getId();?></td>
                <td><?php echo $pedido->getIDProduto();?></td>
                <td><?php echo $pedido->getIDCliente();?></td>
                <td><?php echo date('d/m/Y', strtotime($pedido->getData())); ?></td>
                <td><?php echo $pedido->getQuantidade();?></td>
                <td>R$<?php echo number_format($pedido->getTotal(), 2, ',', '.'); ?></td>
                <td><?php echo $pedido->getStatus();?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:aceitar(<?php echo $pedido->getID(); ?>)">
                        <i class="material-icons">content_paste</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:location.href='formEditPedido.php?id=' + '<?php echo $pedido->getID();?>'">
                        <i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:finalizar(<?php echo $pedido->getID(); ?>)">
                        <i class="material-icons">done</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:cancelar(<?php echo $pedido->getID(); ?>)">
                        <i class="material-icons">clear</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:remover(<?php echo $pedido->getID(); ?>)">
                        <i class="material-icons">delete</i></a>
                </td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>
