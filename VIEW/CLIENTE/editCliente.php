<?php 
    namespace VIEW\cliente;
    include_once 'C:\xampp\htdocs\gestaosemear\MODEL\cliente.php'; 
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\cliente.php'; 

    $cliente = new \MODEL\cliente();

    $cliente->setID($_POST['txtID']);
    $cliente->setNome($_POST['txtNome']);
    $cliente->setContato($_POST['txtContato']);
    $cliente->setEndereco($_POST['txtEndereco']);

    $bllCli = new \BLL\cliente(); 
    $result =  $bllCli->Update($cliente);  

    header("location: listarCliente.php");
?>