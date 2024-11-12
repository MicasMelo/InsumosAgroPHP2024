<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaosemear\DAL\usuario.php';

    class Usuario{
        public function SelectUser(string $usuario){
            $dal = new \DAL\usuario();
            return $dal->SelectUser($usuario);
        }
    }
?>