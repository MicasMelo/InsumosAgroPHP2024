<?php 
    namespace VIEW\pedido;
    include_once 'C:\xampp\htdocs\gestaosemear\MODEL\pedido.php'; 
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php'; 

    $pedido = new \MODEL\pedido();

    $pedido->setID($_POST['txtID']);
    $pedido->setQuantidade($_POST['txtQuantidade']);

    $bllPdd = new \BLL\pedido();
    $result =  $bllPdd->Update($pedido);  

    header("location: listarPedido.php");
?>