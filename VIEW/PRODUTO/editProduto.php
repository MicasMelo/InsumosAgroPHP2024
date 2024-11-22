<?php 
    namespace VIEW\produto;
    include_once 'C:\xampp\htdocs\gestaosemear\MODEL\produto.php'; 
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php'; 

    $produto = new \MODEL\produto();

    $produto->setID($_POST['txtID']);
    $produto->setDescricao($_POST['txtDesc']);
    $produto->setEstoque($_POST['txtEstoque']);
    $produto->setValor($_POST['txtValor']);

    $bllProd = new \BLL\produto();
    $result =  $bllProd->Update($produto);  

    header("location: listarProduto.php");
?>