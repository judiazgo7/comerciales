<?php 

    /**
     * Clase que implementa el Modelo de un Centro Comercial
     */
    class cenComercial {
        private $id;
        private $nombre;
        private $direccion;
        private $link;
        
        /**
         * Devuelve el Id del centro comercial
         * @return type
         */
        public function getId(){
            return $this->id;
        }

        /**
         * Cambia el Id del Centro Comercial
         * @param type $id
         */
        public function setId($id){
            $this->id = $id;
        }

        /**
         * Devuelve el Nombre del centro comercial
         * @return type
         */
        public function getNombre(){
            return $this->nombre;
        }

         /**
         * Cambia el nombre del Centro Comercial
         * @param type $id
         */
       public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        /**
         * Devuelve la dirección del centro comercial
         * @return type
         */
        public function getDireccion() {
            return $this->direccion;
        }

        /**
         * Cambia la dirección del Centro Comercial
         * @param type $id
         */
        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        /**
         * Devuelve la URL del centro comercial
         * @return type
         */
        public function getLink(){
            return $this->link;
        }

        /**
         * Cambia la URL del Centro Comercial
         * @param type $id
         */
        public function setLink($link){
            $this->link = $link;
        }
    }
?>