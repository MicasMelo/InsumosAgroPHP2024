<?php
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location:/gestaosemear/CONTROLLER/index.php");
  }
?>

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
      color: #2e4d23;
      margin: 0;
      position: relative;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #2e4d23;
      color: white;
      text-align: center;
    }
    .nav-wrapper { background-color: #2e4d23 !important; }
    .nav-wrapper .brand-logo, .nav-wrapper a { color: #f5f1e3 !important; }
    .button {
      background-color: #2e4d23;
      color: #f5f1e3;
      padding: 20px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      transition: background-color 0.3s ease;
      width: 100%;
      max-width: 300px;
      text-align: center;
      margin: 10px;
    }
    .button:hover { background-color: #004d00; }
    .button-container {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      height: 100px;
      margin-top: 150px;
      width: 100%;
    }
  </style>

  <link rel="icon" href="/gestaosemear/IMG/plantaikon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
  <title> SEMEAR </title>
</head>

<body>
  <nav class="nav-wrapper z-depth-0">
    <div class="container">
      <a href="/gestaosemear/VIEW/menu.php" class="brand-logo left">SEMEAR</a>
      <a href="#" data-target="menu-mobile" class="sidenav-trigger right"> <i class="material-icons">menu</i> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down"> <li><a href="/gestaosemear/CONTROLLER/logout.php">Logout</a></li> </ul>
    </div>
  </nav> 

  <ul id="menu-mobile" class="sidenav"> <li><a href="/gestaosemear/CONTROLLER/logout.php">Logout</a></li> </ul>

  <div class="button-container">
    <a href="/gestaosemear/VIEW/PRODUTO/listarProduto.php" class="button">Produtos</a>
    <a href="/gestaosemear/VIEW/CLIENTE/listarCliente.php" class="button">Cliente</a>
    <a href="/gestaosemear/VIEW/PEDIDO/listarPedido.php" class="button">Pedidos</a>
  </div>

  <div class="footer">
    <?php include_once 'C:\xampp\htdocs\gestaosemear\CONTROLLER\footer.php'; ?>
  </div>

  <!-- jQuery and Materialize JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
      });
  </script>
</body>
</html>
