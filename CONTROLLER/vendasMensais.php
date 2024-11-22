<?php
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\pedido.php';

    $bllPdd = new \BLL\pedido();
    $listaPedido = $bllPdd->VendasMensais();

    echo "<table border='1'>
        <tr>
            <th>Mês/Ano</th>
            <th>Total de Vendas (Finalizado)</th>
            <th>Total de Vendas (Aceito/Preparo)</th>
            <th>Total de Vendas (Cancelado)</th>
        </tr>";

    foreach ($listaPedido as $row) {
        echo "<tr>
            <td>" . $row['mes_ano'] . "</td>
            <td>R$ " . number_format($row['total_vendas_finalizado'], 2, ',', '.') . "</td>
            <td>R$ " . number_format($row['total_vendas_aceito'], 2, ',', '.') . "</td>
            <td>R$ " . number_format($row['total_vendas_cancelado'], 2, ',', '.') . "</td>
          </tr>";
    } echo "</table>";
?>