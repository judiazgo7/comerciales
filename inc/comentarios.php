<?php 

    /**
     * Clase que implementa el Modelo de los Comentarios
     */
    class Comentario{
        private $numUsuario;
        private $numCentro;
        private $comentario;
        private $calificacion;
        
        public function getNumUsuario() {
            return $this->numUsuario;
        }

        public function getNumCentro() {
            return $this->numCentro;
        }

        public function getComentario() {
            return $this->comentario;
        }

        public function getCalificacion() {
            return $this->calificacion;
        }

        public function setNumUsuario($numUsuario) {
            $this->numUsuario = $numUsuario;
        }

        public function setNumCentro($numCentro) {
            $this->numCentro = $numCentro;
        }

        public function setComentario($comentario) {
            $this->comentario = $comentario;
        }

        public function setCalificacion($calificacion) {
            $this->calificacion = $calificacion;
        }
    }
?>