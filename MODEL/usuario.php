<?php
    namespace MODEL;
    class Usuario{
        private ?int $id;
        private ?string $usuario;
        private ?string $senha;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getUsuario(){
            return $this->usuario;}

        public function setUsuario(string $usuario){
            $this->usuario = $usuario;}

        public function getSenha(){
            return $this->senha;}

        public function setSenha(string $senha){
            $this->senha = $senha;}
    }
?>