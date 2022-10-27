<?php 
    require_once('conexion.php');
    require_once('comentarios.php');
    require_once('cenComercial.php');
    require_once('DAO_cenComercial.php');
    //session_start();

    /**
     * Clase que implementa el patrón DAO para el acceso a la tabla Comentarios en la BD 
     * la cual guarda los datos de los comentarios hechos a los Centros Comerciales
     * por los usuarios
     */
    class DAOComentarios {

        public function __construct(){}

        /**
         * Método que recibe un objeto de tipo Comentario y guarda los valores en la BD
         * @param type $comentario
         */
        public function insertar($comentario){
            $db=DB::conectar();
            $insert=$db->prepare('INSERT INTO Comentarios VALUES (:numUsuario, :numCentro, :coment, :calificacion)');
            $insert->bindValue('numUsuario',$comentario->getNumUsuario());
            $insert->bindValue('numCentro',$comentario->getNumCentro());
            $insert->bindValue('coment',$comentario->getComentario());
            $insert->bindValue('calificacion',$comentario->getCalificacion());
            $insert->execute();
        }

        /**
         * Método que obtiene los datos del comentario de un usuario para un Centro Comercial
         * @param type $numUsuario
         * @param type $numCentro
         * @return \Comentario
         */
        public function buscarComentario ($numUsuario, $numCentro){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM Comentarios WHERE NumUsuario=:numUsuario AND NumCenCom=:numCentro');
            $select->bindValue('numUsuario',$numUsuario);
            $select->bindValue('numCentro',$numCentro);
            $select->execute();
            $registro=$select->fetch();
            $comentario=new Comentario();
            if ($registro['NumUsuario']!=NULL) {
                //si es correcta, asigna los valores que trae desde la base de datos
                $comentario->setNumUsuario($registro['NumUsuario']);
                $comentario->setNumCentro($registro['NumCenCom']);
                $comentario->setComentario($registro['comentario']);
                $comentario->setCalificacion($registro['puntaje']);
            }	
            return $comentario;
        }
               
        /**
         * Método que obtiene una lista de todos los comentarios de un centro comercial por el nombre
         * @param type $nomCentro
         * @return \Comentario
         */
        public function listarComentarios ($nomCentro){
            $db=Db::conectar();
            $DAOcentro = new DAOCenComercial();
            $centro = new cenComercial();
            $centro = $DAOcentro::buscarCenComercial($nomCentro);
            
            $select=$db->prepare('SELECT * FROM Comentarios WHERE NumCenCom=:numCentro');
            $select->bindValue('numCentro',$centro->getId());
            $select->execute();
            $resultados = $select->fetchAll();
                      
            $lista = [];
            if ($select->rowCount() > 0) {
                foreach ($resultados as $result) {
                    $coment = new Comentario();
                    $coment->setNumUsuario   ($result['NumUsuario']);
                    $coment->setNumCentro    ($result['NumCenCom']);
                    $coment->setComentario   ($result['comentario']);
                    $coment->setCalificacion ($result['puntaje']);
                    $lista[] = $coment;
                }
            }
            return $lista;
        }
        
        /**
         * Método que obtiene el promedio de calificación de un centro comercial por el nombre
         * @param type $nomCentro
         * @return type
         */
        public function promedioPuntaje ($nomCentro){
            $db=Db::conectar();
            $DAOcentro = new DAOCenComercial();
            $centro = new cenComercial();
            $centro = $DAOcentro::buscarCenComercial($nomCentro);
            
            $select=$db->prepare('SELECT AVG(Puntaje) FROM Comentarios WHERE NumCenCom=:numCentro');
            $select->bindValue('numCentro',$centro->getId());
            $select->execute();
            $promedio = $select->fetch();
            return $promedio[0];
        }

    }
?>
