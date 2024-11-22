<?php
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php'; 
    require_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php';

    $id = $_GET['id'];

    $bllPdd = new \BLL\pedido(); 
    $bllProduto = new \BLL\Produto();

    $pedido = $bllPdd->SelectID($id);
    $idProduto = $pedido->getIDProduto();
    $quantidadePedido = $pedido->getQuantidade();

    $produto = $bllProduto->SelectID($idProduto);
    $precoProduto = $produto->getValor();

    $totalPedido = $quantidadePedido * $precoProduto;
    $pedido->setTotal($totalPedido);

    $bllPdd->Calcula($id, $totalPedido);
    $result =  $bllPdd->Aceita($id);


    header("location: ../VIEW/PEDIDO/listarPedido.php");
?>
