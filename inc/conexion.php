<?php 

    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'comerciales');
    
    /**
     * Clase que implementa la conexión a la BD con PDO
     */
    class Db{
    
        private static $conexion=null;
	private function __construct(){}

	public static function conectar(){
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion=new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,$pdo_options);
            return self::$conexion;
	}
    }
?>