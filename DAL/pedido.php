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
            $sql = "INSERT INTO pedido (idCliente,idProduto,dataPedido,quantidade,status)
                    VALUES ('{$pdd->getIDCliente()}','{$pdd->getIDProduto()}','{$pdd->getData()}',
                            '{$pdd->getQuantidade()}','{$pdd->getStatus()}');";
            $con = conexao::conectar();
            $result = $con->query($sql);
            $con = conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\pedido $pdd){
            $sql = "UPDATE pedido SET quantidade=?, total=0, status=1 WHERE id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($pdd->getQuantidade(),$pdd->getID()));
            $con = conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM pedido WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Cancela(int $id){
            $sql = "UPDATE pedido SET status = 4 WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Finaliza(int $id){
            $sql = "UPDATE pedido SET status = 3 WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Calcula(int $id, float $total) {
            $sql = "UPDATE pedido SET total = ? WHERE id = ?";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute([$total, $id]);
            $con = Conexao::desconectar();
            return $result;
        }
    
        public function Aceita(int $id) {
            $sql = "UPDATE pedido SET status = 2 WHERE id = ?";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute([$id]);
            $con = Conexao::desconectar();
            return $result;
        }
    
        public function Agrupa(int $id) {
            $sql = "SELECT cliente.nome, COUNT(pedido.id) as total_pedidos 
                    FROM pedido 
                    INNER JOIN cliente ON pedido.idCliente = cliente.id 
                    WHERE cliente.id = ? 
                    GROUP BY cliente.id";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute([$id]);
            $result = $query->fetchAll();
            $con = Conexao::desconectar();
            return $result;
        }
    
        public function VendasMensais() {
            $sql = "SELECT DATE_FORMAT(dataPedido, '%m/%Y') as mes_ano,
                           SUM(CASE WHEN status = 3 THEN total ELSE 0 END) as total_vendas_finalizado,
                           SUM(CASE WHEN status = 2 THEN total ELSE 0 END) as total_vendas_aceito,
                           SUM(CASE WHEN status = 4 THEN total ELSE 0 END) as total_vendas_cancelado
                    FROM pedido
                    GROUP BY MONTH(dataPedido), YEAR(dataPedido)";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute();  // Nenhum parâmetro é necessário
            $result = $query->fetchAll();
            $con = Conexao::desconectar();
            return $result;
        }
    }
?>