<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaosemear\DAL\cliente.php';

    class Cliente{
        public function Select(){
            $dalCli = new \DAL\cliente();
            return $dalCli->Select();
        }

        public function SelectID(int $id){
            $dalCli = new \DAL\cliente();
            return $dalCli->SelectID($id);
        }

        public function SelectEndereco(string $end) {
            $dalCli = new \DAL\cliente();
            return $dalCli->SelectEndereco($end);
        }        

        public function Insert(\MODEL\cliente $cliente){
            $dalCli = new \DAL\cliente();
            return $dalCli->Insert($cliente);
        }

        public function Update(\MODEL\cliente $cliente){
            $dalCli = new \DAL\cliente();
            return $dalCli->Update($cliente);
        }

        public function Delete($id){
            $dalCli = new \DAL\cliente();
            return $dalCli->Delete($id);
        }
    }
?>