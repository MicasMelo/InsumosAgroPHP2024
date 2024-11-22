<?php
include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php';

$abaixo = $_GET['estoque'] ?? '';
$bllProd = new \BLL\produto();
$listaProduto = $bllProd->SelectEstoque($abaixo);

echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Estoque</th>
            <th>Valor</th>
        </tr>";

foreach ($listaProduto as $prod) {
    echo "<tr>
        <td>{$prod->getId()}</td>
        <td>{$prod->getDescricao()}</td>
        <td>{$prod->getEstoque()}</td>
        <td>R$ " . number_format($prod->getValor(), 2, ',', '.') . "</td>
      </tr>";
} echo "</table>";
?>