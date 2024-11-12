<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaosemear\DAL\conexao.php';
    require_once 'C:\xampp\htdocs\gestaosemear\MODEL\status.php';

    class Status{
        public function Select(){

            $sql = "Select * from status;";
            $con = conexao::conectar();
            $dados = $con->query($sql);
            $con = conexao::desconectar();

            foreach ($dados as $linha){
                $status = new \MODEL\status();
                $status->setID($linha['id']);
                $status->setDescricao($linha['descricao']);
                $listaStt[] = $status;
            } return $listaStt;
        }
    }
?>
