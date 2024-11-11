<?php
    namespace MODEL;
    class Pedido{
        private ?int $id;
        private ?int $idCliente;
        private ?int $idProduto;
        private ?int $quantidade;
        private ?float $total;
        private ?int $status;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getIDCliente(){
            return $this->idCliente;}

        public function setIDCliente(int $idCliente){
            $this->idCliente = $idCliente;}

        public function getIDProduto(){
            return $this->idProduto;}

        public function setIDProduto(int $idProduto){
            $this->idProduto = $idProduto;}

        public function getQtde(){
            return $this->quantidade;}

        public function setQtde(int $quantidade){
            $this->quantidade = $quantidade;}

        public function getTotal(){
            return $this->total;}

        public function setTotal(float $total){
            $this->total = $total;}

        public function getStatus(){
            return $this->status;}
    
        public function setStatus(int $status){
            $this->status = $status;}
    }
?>