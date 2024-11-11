<?php
    namespace MODEL;
    class Produto{
        private ?int $id;
        private ?string $descricao;
        private ?int $estoque;
        private ?float $valor;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getDescricao(){
            return $this->descricao;}

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;}

        public function getEstoque(){
            return $this->estoque;}

        public function setEstoque(int $estoque){
            $this->estoque = $estoque;}

        public function getValor(){
            return $this->valor;}

        public function setValor(float $valor){
            $this->valor = $valor;}
    }
?>