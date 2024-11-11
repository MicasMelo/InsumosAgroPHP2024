<?php
    namespace MODEL;
    class Cliente{
        private ?int $id;
        private ?string $nome;
        private ?string $contato;
        private ?string $endereco;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getNome(){
            return $this->nome;}

        public function setNome(string $nome){
            $this->nome = $nome;}

        public function getContato(){
            return $this->contato;}

        public function setContato(string $contato){
            $this->contato = $contato;}

        public function getEndereco(){
            return $this->endereco;}

        public function setEndereco(string $endereco){
            $this->endereco = $endereco;}
    }
?>
