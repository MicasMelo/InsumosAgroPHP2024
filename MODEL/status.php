<?php
    namespace MODEL;
    class Status{
        private ?int $id;
        private ?string $descricao;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getDescricao(){
            return $this->descricao;}

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;}
    }
?>