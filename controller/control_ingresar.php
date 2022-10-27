<!-- Controlador que verifica el inicio de sesión 
    direccionando a la página correspondiente o mostrando un error 
-->

<?php 
    require_once('../inc/usuario.php');
    require_once('../inc/DAO_usuario.php');
    //require_once('../inc/conexion.php');

    //inicio de sesion
    session_start();

    $usuario=new Usuario();
    $DaoUsu=new DAOUsuario();
    //verifica si la variable Entrar está definida y trae los datos de usuario del formulario
    if (isset($_POST['Entrar'])) { 
        $usuario=$DaoUsu->autenticarUsuario($_POST['usuario'],$_POST['password']);
        // si el id del objeto retornado no es null, quiere decir que encontro el registro en la BD
        if ($usuario->getId()!=NULL) {
            //$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
            $_SESSION['usuario']=$_POST['usuario']; //si el usuario se encuentra, crea la sesión de usuario
            header('Location: ../view/homedos.php'); //envia a la página de usuario logueado
        }else{
            header('Location: ../view/mensaje.php?mensaje=El nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
        }
    }elseif(isset($_POST['Salir'])){ // cuando presiona el botón salir
        header('Location: ../index.php');
        unset($_SESSION['usuario']); //destruye la sesión
    }
?>