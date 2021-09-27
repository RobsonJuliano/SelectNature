<?php
    class Publicacao{
        private $topico;
        private $id_pub;
        private $imagem;
        private $titulo;
        private $texto;
        
        public function setTopico($topico) {
            $this -> topico = $topico;
        }
        public function setId_pub($id_pub) {
            $this -> id_pub = $id_pub;
        }
        public function setImagem($imagem) {
            $this -> imagem = $imagem;
        }
        public function setTitulo($titulo) {
            $this -> titulo = $titulo;
        }
        public function setFonte($fonte) {
            $this -> fonte = $fonte;
        }


        public function getTopico() {
            return $this -> topico;
        }
        public function getId_pub() {
            return $this -> id_pub;
        }
        public function getImagem() {
            return $this -> imagem;
        }
        public function getTitulo() {
            return $this -> titulo;
        }
        public function getFonte() {
            return $this -> fonte;
        }
    }
?>