<?php 
    namespace VIEW\produto;
    include_once 'C:\xampp\htdocs\gestaosemear\BLL\produto.php'; 

    $id = $_GET['id'];

    try {
        $bllProd = new \BLL\produto(); 
        $result =  $bllProd->Delete($id);

        header("location: listarProduto.php");

    } catch (\Exception $e) {
        $message = '';
        if (str_contains($e->getMessage(), 'foreign key constraint')) {
            $message = "Produto não pode ser excluído pois possui pedidos vinculados.";
        } else {
            $message = "Erro ao excluir produto: " . $e->getMessage();
        }

        echo "<script> alert('$message');
            window.location.href = 'listarProduto.php'; </script>";
}
?>