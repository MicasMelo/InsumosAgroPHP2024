<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaosemear\DAL\conexao.php';
    require_once 'C:\xampp\htdocs\gestaosemear\MODEL\pedido.php';

    class Pedido{
        public function Select(){
            $sql = "Select * from pedido;";
            $con = conexao::conectar();
            $dados = $con->query($sql);
            $con = conexao::desconectar();

            $listaPdd = [];
            foreach ($dados as $linha){
                $pedido = new \MODEL\pedido();
                $pedido->setID($linha['id']);
                $pedido->setIDCliente($linha['idCliente']);
                $pedido->setIDProduto($linha['idProduto']);
                $pedido->setData($linha['dataPedido']);
                $pedido->setQuantidade($linha['quantidade']);
                $pedido->setTotal($linha['total']);
                $pedido->setStatus($linha['status']);
                $listaPdd[] = $pedido;
            } return $listaPdd;
        }

        public function SelectId(int $id){
            $sql = "Select * from pedido where id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = conexao::desconectar();

            $pedido = new \MODEL\pedido();
            $pedido->setID($linha['id']);
            $pedido->setIDCliente($linha['idCliente']);
            $pedido->setIDProduto($linha['idProduto']);
            $pedido->setData($linha['dataPedido']);
            $pedido->setQuantidade($linha['quantidade']);
            $pedido->setTotal($linha['total']);
            $pedido->setStatus($linha['status']);
            return $pedido;
        }

        public function Insert(\MODEL\pedido $pdd){
            $sql = "INSERT INTO pedido (idCliente,idProduto,dataPedido,quantidade,total,status)
                    VALUES ('{$pdd->getIDCliente()}','{$pdd->getIDProduto()}','{$pdd->getData()}',
                            '{$pdd->getQuantidade()}','{$pdd->getTotal()}','{$pdd->getStatus()}');";
            $con = conexao::conectar();
            $result = $con->query($sql);
            $con = conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\pedido $pdd){
            $sql = "UPDATE pedido SET idCliente=?,idProduto=?,quantidade=?,total=?,status=? WHERE id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($pdd->getIDCliente(),$pdd->getIDProduto(),$pdd->getQuantidade(),
                                            $pdd->getTotal(),$pdd->getStatus(),$pdd->getID()));
            $con = conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM pedido WHERE id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = conexao::desconectar();
            return $result;
        }
    }
?>