<?php
include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php';

$pedido = $_GET['cliente'] ?? '';
$bllPdd = new \BLL\pedido();
$listaPedido = $bllPdd->Agrupa($pedido);

echo "<table border='1'>
    <tr>
        <th>Cliente</th>
        <th>Total de Pedidos</th>
    </tr>";

foreach ($listaPedido as $row) {
    echo "<tr>
        <td>{$row['nome']}</td>
        <td>{$row['total_pedidos']}</td>
      </tr>";
}
echo "</table>";
?>
