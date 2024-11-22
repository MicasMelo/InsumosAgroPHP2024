<?php 
    namespace VIEW\cliente;
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\cliente.php'; 

    $id = $_GET['id'];

    try {
        $bllCli = new \BLL\cliente(); 
        $result = $bllCli->Delete($id);

        header("location: listarCliente.php");
    } catch (\Exception $e) { // Aqui pega o erro da chave estrangeira
        $message = '';
        if (str_contains($e->getMessage(), 'foreign key constraint')) {
            $message = "Cliente não pode ser excluído pois possui pedidos vinculados.";
        } else {
            $message = "Erro ao excluir cliente: " . $e->getMessage();
        }

        echo "<script> alert('$message');
            window.location.href = 'listarCliente.php'; </script>";
    }
?>