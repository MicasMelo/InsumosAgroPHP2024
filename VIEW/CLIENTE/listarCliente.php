<?php
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\cliente.php';
    use \BLL\cliente;

    $bllCliente = new \BLL\cliente();
    $listaCliente = $bllCliente->Select(); 
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
        function remover(id){
            if(confirm('Excluir Cliente ' + id + '?')){
                location.href = 'delCliente.php?id=' + id;}}
        function filtrar(endereco){
                location.href = '../CONTROLLER/filtraCliente.php?endereco=' + endereco;}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>
</head>
<body>
<?php include_once '../template.php'; ?>
    <br><br>
    <div class="container grey lighten-3 brown-text col s12 margin">
        <div class="center">
            <h1>Lista de Clientes</h1>
            <div class="row center-align">
                <div class="col offset-s3 s10">
                <form action="../../CONTROLLER/filtraCliente.php" method="GET" id="filtrar" class="col s10">
                    <div class="input-field col s8">
                        <input type="text" placeholder="Filtro por endereço" class="form-control col s10" id="txtFiltra" name="endereco">
                        <button class="btn-floating btn-medium waves-effect waves-light" type="submit">
                                <i class="material-icons">filter_list</i></button>
                    </div>
                </form>
                </div>
            </div>
            <table class="highlight">
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Contato</th>
                <th>Endereço</th>
                <th>Operações</th>
                <th><a class="btn-floating btn-medium waves-effect waves-light">
                    <i class="material-icons" onclick="javascript:location.href='formCliente.php'">add</i></a></th>
                </tr>

    <?php foreach ($listaCliente as $cliente) {?>
        <tr>
        <td><?php echo $cliente->getId();?></td>
        <td><?php echo $cliente->getNome();?></td>
        <td><?php echo $cliente->getContato();?></td>
        <td><?php echo $cliente->getEndereco();?></td>
        <td><a class="btn-floating btn-small waves-effect waves-light"
                onclick="javascript:location.href='formEditCliente.php?id=' + '<?php echo $cliente->getID();?>'">
                <i class="material-icons">edit</i></a>
            <a class="btn-floating btn-small waves-effect waves-light"
                onclick="javascript:remover(<?php echo $cliente->getID(); ?>)">
                <i class="material-icons">delete</i></a>
        </td>
        </tr>
    <?php } ?>
            </table>
</body>
</html>