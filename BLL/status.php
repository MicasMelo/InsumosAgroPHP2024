<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaosemear\DAL\status.php';
    use DAL;

    class Status{
        public function Select(){
            $dalStt = new \DAL\status();
            return $dalStt->Select();
        }
    }
?>