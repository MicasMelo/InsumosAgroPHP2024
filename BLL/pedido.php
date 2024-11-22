<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaosemear\DAL\pedido.php';

    class Pedido{
        public function Select(){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->Select();
        }

        public function SelectID(int $id){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->SelectID($id);
        }

        public function Insert(\MODEL\pedido $pedido){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->Insert($pedido);
        }

        public function Update(\MODEL\pedido $pedido){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->Update($pedido);
        }

        public function Delete($id){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->Delete($id);
        }

        public function Cancela($id){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->Cancela($id);
        }

        public function Finaliza($id){
            $dalPedido = new \DAL\pedido();
            return $dalPedido->Finaliza($id);
        }

        public function Calcula(int $id, float $total) {
            $dalPedido = new \DAL\Pedido();
            return $dalPedido->Calcula($id, $total);
        }
    
        public function Aceita(int $id) {
            $dalPedido = new \DAL\Pedido();
            return $dalPedido->Aceita($id);
        }
    
        public function Agrupa(int $id) {
            $dalPedido = new \DAL\Pedido();
            return $dalPedido->Agrupa($id);
        }
    
        public function VendasMensais() {
            $dalPedido = new \DAL\Pedido();
            return $dalPedido->VendasMensais();
        }
    }
?>