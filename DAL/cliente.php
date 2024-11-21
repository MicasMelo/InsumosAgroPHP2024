<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaosemear\DAL\conexao.php';
    require_once 'C:\xampp\htdocs\gestaosemear\MODEL\cliente.php';

    class Cliente{
        public function Select(){
            $sql = "Select * from cliente;";
            $con = conexao::conectar();
            $dados = $con->query($sql);
            $con = conexao::desconectar();

            $listaCli = [];
            foreach ($dados as $linha){
                $cliente = new \MODEL\cliente();
                $cliente->setID($linha['id']);
                $cliente->setNome($linha['nome']);
                $cliente->setContato($linha['contato']);
                $cliente->setEndereco($linha['endereco']);
                $listaCli[] = $cliente;
            } return $listaCli;
        }

        public function SelectID(int $id){
            $sql = "Select * from cliente where id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = conexao::desconectar();

            $cliente = new \MODEL\cliente();
            $cliente->setID($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setContato($linha['contato']);
            $cliente->setEndereco($linha['endereco']);
            return $cliente;
        }

        public function Insert(\MODEL\cliente $cliente){
            $sql = "INSERT INTO cliente (nome, contato, endereco)
                    VALUES ('{$cliente->getNome()}','{$cliente->getContato()}','{$cliente->getEndereco()}');";
            $con = conexao::conectar();
            $result = $con->query($sql);
            $con = conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\cliente $cliente){
            $sql = "UPDATE cliente SET nome=?, contato=?, endereco=? WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($cliente->getNome(),$cliente->getContato(),$cliente->getEndereco(),$cliente->getID()));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM cliente WHERE id=?;";
            $con = conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = conexao::desconectar();
            return $result;
        }
    }
?>