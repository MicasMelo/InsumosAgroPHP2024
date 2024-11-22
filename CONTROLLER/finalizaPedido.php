<?php
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php';
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php';

    $id = $_GET['id'];

    $bllPdd = new \BLL\pedido(); 
    
    $bllProduto = new \BLL\Produto();
    $pedido = $bllPdd->SelectID($id);
    $idProduto = $pedido->getIDProduto();
    $quantidadePedido = $pedido->getQuantidade();

    $produto = $bllProduto->SelectID($idProduto);
    $estoqueAtual = $produto->getEstoque();

    if ($estoqueAtual >= $quantidadePedido) {
        $novoEstoque = $estoqueAtual - $quantidadePedido;
        $produto->setEstoque($novoEstoque);
        $result = $bllProduto->Estoque($produto);

        $result =  $bllPdd->Finaliza($id);
        
        header("location: ../VIEW/PEDIDO/listarPedido.php");
    } else {
        echo "<script>alert('Estoque insuficiente para finalizar o pedido.'); 
        window.location.href = '../VIEW/PEDIDO/listarPedido.php';</script>";
    } 
?>