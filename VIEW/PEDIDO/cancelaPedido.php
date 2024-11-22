<?php 
    namespace VIEW\pedido;
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php'; 

    $id = $_GET['id'];

    $bllPdd = new \BLL\pedido(); 
    $result =  $bllPdd->Cancela($id);

    header("location: listarPedido.php");
?>