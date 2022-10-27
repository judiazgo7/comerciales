
<?php 
    require_once('conexion.php');
    require_once('cenComercial.php');
    //session_start();

    /**
     * Clase que implementa el patrón DAO para el acceso a la tabla cenComercial en la BD 
     * la cual guarda los datos de los Centros Comerciales
     */
    class DAOCenComercial{

        public function __construct(){}

        /***
         * Método que recibe un objeto de tipo cenComercial y guarda los valores en al BD
         */
        public function insertar($cenComercial){
            $db=DB::conectar();
            $insert=$db->prepare('INSERT INTO cenComercial VALUES (NULL, :Nombre, :Direccion, :Link)');
            $insert->bindValue('Nombre',$cenComercial->getNombre());
            $insert->bindValue('Direccion',$cenComercial->getDireccion());
            $insert->bindValue('Link',$cenComercial->getLink());
            $insert->execute();
        }

        /****
         * Método que obtiene los datos del Centro Commercial por el nombre
         */
        public static function buscarCenComercial($nombre){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM cenComercial WHERE Nombre=:Nombre');
            $select->bindValue('Nombre',$nombre);
            $select->execute();
            $registro=$select->fetch();
            $centro=new cenComercial();
            if ($registro['NumCenCom']!=NULL) {
                //si hay datos, asigna los valores que trae desde la base de datos
                $centro->setId($registro['NumCenCom']);
                $centro->setNombre($registro['Nombre']);
                $centro->setDireccion($registro['Direccion']);
                $centro->setLink($registro['Link']);
            }	
            return $centro;
        }
    }
?>