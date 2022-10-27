<?php 
    require_once('conexion.php');
    require_once('usuario.php');
    //session_start();

    /**
     * Clase que implementa el patrón DAO para el acceso a la tabla Usuarios en la BD 
     */
    class DAOUsuario{

        public function __construct(){}

        /**
         * Método que recibe un objeto de tipo Usuario e inserta los datos en la BD
         * @param type $usuario
         */
        public function insertar($usuario){
            $db=DB::conectar();
            $insert=$db->prepare('INSERT INTO Usuario VALUES (NULL, :NombreUsuario, :Correo, :Contrasena)');
            $insert->bindValue('NombreUsuario',$usuario->getNombre());
            $insert->bindValue('Correo',$usuario->getCorreo());
            //encripta la clave
            //$pass=password_hash($usuario->getClave(),PASSWORD_DEFAULT);
            //$insert->bindValue('Contrasena',$pass);
            $insert->bindValue('Contrasena',$usuario->getClave());
            $insert->execute();
        }

        /**
         * Método que busca un usuario por el nombre y compara la clave, si coincide, retorna el usuario completo (se usa para el login)
         * @param type $nombre
         * @param type $clave
         * @return \Usuario
         */
        public function autenticarUsuario($nombre, $clave){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM Usuario WHERE NombreUsuario=:NombreUsuario');//AND clave=:clave
            $select->bindValue('NombreUsuario',$nombre);
            $select->execute();
            $registro=$select->fetch();
            $usuario=new Usuario();
            //verifica si la clave es correcta
            //if (password_verify($clave, $registro['Contrasena'])) {				
            if (strcmp($clave, $registro['Contrasena']) === 0) {
                //si es correcta, asigna los valores que trae desde la base de datos
                $usuario->setId($registro['NumUsuario']);
                $usuario->setNombre($registro['NombreUsuario']);
                $usuario->setCorreo($registro['Correo']);
                $usuario->setClave($registro['Contrasena']);
            }	
            return $usuario;
        }

        /**
         * Método que busca un usuario por el nombre, devuelve true o false (se usa en el registro para saber si un usuario ya existe)
         * @param type $nombre
         * @return boolean
         */
        public function existeUsuario($nombre){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM Usuario WHERE NombreUsuario=:NombreUsuario');
            $select->bindValue('NombreUsuario',$nombre);
            $select->execute();
            $registro=$select->fetch();
            if($registro['NumUsuario']!=NULL){
                    $usado=False;
            }else{
                    $usado=True;
            }	
            return $usado;
        }

        /**
         * Método que busca un usuario por el nombre y lo devuelve
         * @param type $nombre
         * @return \Usuario
         */
        public function buscarUsuarioNombre($nombre){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM Usuario WHERE NombreUsuario=:NombreUsuario');
            $select->bindValue('NombreUsuario',$nombre);
            $select->execute();
            $registro=$select->fetch();
            $usuario=new Usuario();
            if($registro['NumUsuario']!=NULL){
                $usuario->setId($registro['NumUsuario']);
                $usuario->setNombre($registro['NombreUsuario']);
                $usuario->setCorreo($registro['Correo']);
                $usuario->setClave($registro['Contrasena']);
            }        
            return $usuario;
        }
        
        /**
         * Método que busca un usuario por el Id y lo devuelve
         * @param type $id
         * @return \Usuario
         */
        public static function buscarUsuarioId($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM Usuario WHERE NumUsuario=:NumUsuario');
            $select->bindValue('NumUsuario',$id);
            $select->execute();
            $registro=$select->fetch();
            $usuario=new Usuario();
            if($registro['NumUsuario']!=NULL){
                $usuario->setId($registro['NumUsuario']);
                $usuario->setNombre($registro['NombreUsuario']);
                $usuario->setCorreo($registro['Correo']);
                $usuario->setClave($registro['Contrasena']);
            }        
            return $usuario;
        }
    }
?>