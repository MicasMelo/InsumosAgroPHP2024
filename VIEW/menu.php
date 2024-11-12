<!--<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("location:/gestaosemear/CONTROLLER/index.php");
  }
?>-->

<!DOCTYPE html>
<html lang="pt-Br">
<head>
<style>
  body {
    background-image: url('/gestaosemear/IMG/campoagro.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;
    padding-bottom: 100px;
    color: #2e4d23;
  }
  .footer{
    position: fixed;
    bottom:0%; width: 100%;
    background-color: #8fb88f;
    color: white; text-align: center;
    padding: 15px 0; height: 70px;
  }
  .nav-wrapper {
    background-color: #3e7c40 !important;
  }
  .nav-wrapper .brand-logo, .nav-wrapper a {
    color: #f5f1e3 !important;
  }
  .button {
    z-index: 1;
    background-color: #6a994e;
    color: #f5f1e3;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }
  .button:hover {
    background-color: #a8c686;
  }
  .copyright {
            background-color: #2e4d23;
            color: white;
            padding: 10px;
            font-size: 14px;
            text-align: center;
  }
</style>
<link rel="icon" href="/gestaosemear/IMG/plantaikon.png">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
  <title> SEMEAR </title>
</head>

<body>
<nav class="nav-wrapper z-depth-0">
  <div class="container">
    <a href="/gestaosemear/VIEW/menu.php" class="brand-logo left">SEMEAR</a>
    <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="/gestaosemear/VIEW/PRODUTO/listarProduto.php">Produto</a></li>
      <li><a href="/gestaosemear/VIEW/CLIENTE/listarCliente.php">Cliente</a></li>
      <li><a href="/gestaosemear/VIEW/PEDIDOS/listarPedido.php">Pedidos</a></li>
      <li><a href="/gestaosemear/CONTROLLER/logout.php">Logout</a></li>
    </ul>
  </div>
</nav> 

<ul id="menu-mobile" class="sidenav">
  <li><a href="/gestaosemear/VIEW/PRODUTO/listarProduto.php">Produto</a></li>
  <li><a href="/gestaosemear/VIEW/CLIENTE/listarCliente.php">Cliente</a></li>
  <li><a href="/gestaosemear/VIEW/PEDIDOS/listarPedido.php">Pedidos</a></li>
  <li><a href="/gestaosemear/CONTROLLER/logout.php">Logout</a></li>
</ul>

<!-- jQuery and Materialize JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    });
</script>
<div class="footer"><?php include_once 'C:\xampp\htdocs\gestaosemear\CONTROLLER\footer.php' ?></div>
</body>
</html>
