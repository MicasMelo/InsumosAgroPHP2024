<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaosemear\DAL\produto.php';

    class Produto{
        public function Select(){
            $dalProd = new \DAL\produto();
            return $dalProd->Select();
        }

        public function SelectID(int $id){
            $dalProd = new \DAL\produto();
            return $dalProd->SelectID($id);
        }

	    public function SelectDescricao(string $descricao){
            $dalProd = new \DAL\produto();
            return $dalProd->SelectDescricao($descricao);
        }

        public function Insert(\MODEL\produto $produto){
            $dalProd = new \DAL\produto();
            return $dalProd->Insert($produto);
        }

        public function Update(\MODEL\produto $produto){
            $dalProd = new \DAL\produto();
            return $dalProd->Update($produto);
        }

        public function Delete($id){
            $dalProd = new \DAL\produto();
            return $dalProd->Delete($id);
        }
    }
?>