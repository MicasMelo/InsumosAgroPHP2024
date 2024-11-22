<?php 
namespace VIEW\pedido;
include_once 'C:\xampp\htdocs\gestaosemear\MODEL\pedido.php'; 
include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php'; 

$pedido = new \MODEL\pedido();

$pedido->setIDProduto($_POST['selectIdProduto']);
$pedido->setIDCliente($_POST['selectIdCliente']);
$pedido->setData($_POST['txtData']);
$pedido->setQuantidade($_POST['txtQuantidade']);
$pedido->setStatus($_POST['txtStatus']);

$bllPdd = new \BLL\pedido(); 
$result =  $bllPdd->Insert($pedido);

if ($result->errorCode() == '00000'){
    header("location: listarPedido.php");
} else echo $result->errorInfo();
?>
