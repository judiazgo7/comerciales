<!-- Controlador que verifica el registro de un usuario, 
    mostrando un error en caso que el usuario ya exista 
-->

<?php 
    require_once('../inc/usuario.php');
    require_once('../inc/DAO_usuario.php');
    //require_once('../inc/conexion.php');

    //inicio de sesion
    session_start();

    $usuario=new Usuario();
    $DaoUsu=new DAOUsuario();
    //verifica si la variable Registrarse está definida y trae los datos del usuario del formulario
    if (isset($_POST['Registrarse'])) {
        $usuario->setNombre($_POST['usuario']);
        $usuario->setCorreo($_POST['correo']);
        $usuario->setClave($_POST['password']);
        if ($DaoUsu->existeUsuario($_POST['usuario'])) {
            $DaoUsu->insertar($usuario);
            header('Location: ../view/mensaje.php?mensaje=El usuario fue creado con éxito');
        }else{
            header('Location: ../view/mensaje.php?mensaje=El nombre de usuario ya existe');
        }		

    } 
?>