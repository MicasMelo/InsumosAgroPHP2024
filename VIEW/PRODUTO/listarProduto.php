<?php 
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php';
    use \BLL\produto;

    if(isset($_GET['busca']))
	    $busca = $_GET['busca'];
    else $busca = null;

    $bllProduto = new \BLL\produto();
    if($busca == null)
	    $listaProd = $bllProduto->Select();
    else  $listaProd = $bllProduto->SelectDescricao($busca);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="/gestaosemear/IMG/plantaikon.png">
    <style>
        .margin {
            justify-content: center; align-items: center; text-align: center;
            max-width: 400px; width: 100%;
            padding: 40px 30px; margin: 40px 10px;
            border-radius: 5px;
            background-color: #f5f1e3;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-family: 'Roboto';
            font-weight: 700;
        }
        .btn-floating, button { background-color: #2e4d23 !important; color: #f5f1e3 !important; }
    </style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
        function remover(id){
            if(confirm('Excluir Produto ' + id + '?')){
                location.href = 'delProduto.php?id=' + id;}}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
</head>
<body>
<?php include_once '../template.php'; ?>
    <br><br>
    <div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center">
            <h1>Lista de Produtos</h1>
            <div class="row center-align">
                <div class="col offset-s3 s10">
                    <form action="../PRODUTO/listarProduto.php" method="GET" id="buscaProduto" class="col s10">
                        <div class="input-field col s8">
                            <input type="text" placeholder="Produto desejado" class="form-control col s10" id="txtBusca" name="busca">
                            <button class="btn-floating btn-medium waves-effect waves-light" type="submit" name="action">
                                <i class="material-icons">search</i></button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="highlight">
                <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Estoque</th>
                <th>Valor</th>
                <th>Operações</th>
                <th><a class="btn-floating btn-medium waves-effect waves-light">
                    <i class="material-icons" onclick="javascript:location.href='formProduto.php'">add</i></a></th>
                <th><a class="btn-floating btn-medium waves-effect waves-light" 
                    href="../../CONTROLLER/estoqueBaixo.php?estoque=baixo">
                    <i class="material-icons">inbox</i></a></th>
                </tr>

            <?php foreach ($listaProd as $prod) {?>
                <tr>
                <td><?php echo $prod->getId();?></td>
                <td><?php echo $prod->getDescricao();?></td>
                <td><?php echo $prod->getEstoque();?></td>
                <td><?php echo $prod->getValor();?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:location.href='formEditProduto.php?id=' + '<?php echo $prod->getID();?>'">
                        <i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light"
                        onclick="javascript:remover(<?php echo $prod->getID(); ?>)">
                        <i class="material-icons">delete</i></a>
                </td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>
