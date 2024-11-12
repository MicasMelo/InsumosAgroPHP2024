<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaosemear\DAL\conexao.php';
    require_once 'C:\xampp\htdocs\gestaosemear\MODEL\produto.php';

    class Produto{
        public function Select(){
            $sql = "Select * from produto;";
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            $listaProduto = [];
            foreach ($dados as $linha){
                $prod = new \MODEL\produto();
                $prod->setID($linha['id']);
                $prod->setDescricao($linha['descricao']);
                $prod->setEstoque($linha['estoque']);
                $prod->setValor($linha['valor']);
                $listaProduto[] = $prod;
            } return $listaProduto;
        }

        public function SelectId(int $id){
            $sql = "Select * from produto where id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = conexao::desconectar();
            
            $prod = new \MODEL\produto();
            $prod->setID($linha['id']);
            $prod->setDescricao($linha['descricao']);
            $prod->setEstoque($linha['estoque']);
            $prod->setValor($linha['valor']);
            return $prod;
        }

        public function SelectDescricao(string $descricao){
            $sql = "Select * from produto where descricao like '%" . $descricao .  "%' order by descricao;";
            
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $con->query($sql);
            $con = conexao::desconectar();

            $listaProduto = [];
            foreach($result as $linha){
                $prod = new \MODEL\produto();
                $prod->setID($linha['id']);
                $prod->setDescricao($linha['descricao']);
                $prod->setEstoque($linha['estoque']);
                $prod->setValor($linha['valor']);
                $listaProduto[] = $prod;
            } return $listaProduto;
        }

        public function Insert(\MODEL\produto $produto){
            $sql = "INSERT INTO produto (descricao,estoque,valor)
                    VALUES ('{$produto->getDescricao()}','{$produto->getEstoque()}','{$produto->getValor()}');";
            $con = conexao::conectar();
            $result = $con->query($sql);
            $con = conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\produto $produto){
            $sql = "UPDATE produto SET descricao=?,estoque=?,valor=? WHERE id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($produto->getDescricao(),$produto->getEstoque(),$produto->getValor(),$produto->getID()));
            $con = conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM produto WHERE id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = conexao::desconectar();
            return $result;
        }
    }
?>
