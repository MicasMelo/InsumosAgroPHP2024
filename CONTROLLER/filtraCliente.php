<?php
include_once 'C:\xampp\htdocs\gestaosemear\BLL\cliente.php';

$endereco = $_GET['endereco'] ?? '';
$bllCliente = new \BLL\cliente();
$listaCliente = $bllCliente->SelectEndereco($endereco);

echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Contato</th>
            <th>Endereço</th>
        </tr>";
foreach ($listaCliente as $cliente) {
    echo "<tr>
            <td>{$cliente->getID()}</td>
            <td>{$cliente->getNome()}</td>
            <td>{$cliente->getContato()}</td>
            <td>{$cliente->getEndereco()}</td>
          </tr>";
} echo "</table>";
?>
