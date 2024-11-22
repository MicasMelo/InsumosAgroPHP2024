<?php 
    namespace VIEW\produto;
    include_once 'C:\xampp\htdocs\gestaosemear\MODEL\produto.php'; 
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php'; 

    $produto = new \MODEL\produto();

    $produto->setDescricao($_POST['txtDesc']);
    $produto->setEstoque($_POST['txtEstoque']);
    $produto->setValor($_POST['txtValor']);

    $bllProd = new \BLL\produto(); 
    $result =  $bllProd->Insert($produto);  

    if ($result->errorCode() == '00000'){
        header("location: listarProduto.php");
    } else echo $result->errorInfo();
?>