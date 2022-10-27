<!-- Controlador que recibe datos de los formularios de comentarios
    Decide a que Centro Comercial pertenece y llama la función que lo guarda en la BD
-->
<?php 
    //inicio de sesion
    session_start();
    if (!isset($_SESSION['usuario'])) {
	header('Location: ../index.php');
    }

    require_once('../inc/conexion.php');
    require_once('../inc/comentarios.php');
    require_once('../inc/DAO_comentarios.php');
    require_once('../inc/DAO_cenComercial.php');
    require_once('../inc/DAO_usuario.php');

    $comentario=new Comentario();
    $DaoComen=new DAOComentarios();
    $DaoCentro=new DAOCenComercial();
    $DaoUsu = new DAOUsuario();  

    //Si el comentario es del primer centro comercial
    if (isset($_POST['comentario1'])) {        
        $idCentro  = $DaoCentro->buscarCenComercial('MULTIPLAZA')->getId();
        $idUsuario = $DaoUsu->buscarUsuarioNombre($_SESSION['usuario'])->getId();
        $coment    = $_POST['comentario1'];
        $puntaje   = $_POST['star1'];
        //crea todos los campos del comentario para la BD        
        $comentario->setNumUsuario($idUsuario);
        $comentario->setNumCentro($idCentro);
        $comentario->setComentario($coment);
        $comentario->setCalificacion($puntaje);
        //guardar el comentario en la BD
        $DaoComen->insertar($comentario);
        header('Location: ../view/homedos.php'); 
        
    } elseif (isset($_POST['comentario2'])) {        
        $idCentro  = $DaoCentro->buscarCenComercial('PLAZA DE LAS AMERICAS')->getId();
        $idUsuario = $DaoUsu->buscarUsuarioNombre($_SESSION['usuario'])->getId();
        $coment    = $_POST['comentario2'];
        $puntaje   = $_POST['star2'];
        //crea todos los campos del comentario para la BD        
        $comentario->setNumUsuario($idUsuario);
        $comentario->setNumCentro($idCentro);
        $comentario->setComentario($coment);
        $comentario->setCalificacion($puntaje);
        //guardar el comentario en la BD
        $DaoComen->insertar($comentario);
        header('Location: ../view/homedos.php');
        
    } elseif(isset($_POST['comentario3'])) {        
        $idCentro  = $DaoCentro->buscarCenComercial('GRAN ESTACION')->getId();
        $idUsuario = $DaoUsu->buscarUsuarioNombre($_SESSION['usuario'])->getId();
        $coment    = $_POST['comentario3'];
        $puntaje   = $_POST['star3'];
        //crea todos los campos del comentario para la BD        
        $comentario->setNumUsuario($idUsuario);
        $comentario->setNumCentro($idCentro);
        $comentario->setComentario($coment);
        $comentario->setCalificacion($puntaje);
        //guardar el comentario en la BD
        $DaoComen->insertar($comentario);
        header('Location: ../view/homedos.php');
        
    } elseif(isset($_POST['comentario4'])) {        
        $idCentro  = $DaoCentro->buscarCenComercial('HAYUELOS')->getId();
        $idUsuario = $DaoUsu->buscarUsuarioNombre($_SESSION['usuario'])->getId();
        $coment    = $_POST['comentario4'];
        $puntaje   = $_POST['star4'];
        //crea todos los campos del comentario para la BD        
        $comentario->setNumUsuario($idUsuario);
        $comentario->setNumCentro($idCentro);
        $comentario->setComentario($coment);
        $comentario->setCalificacion($puntaje);
        //guardar el comentario en la BD
        $DaoComen->insertar($comentario);
        header('Location: ../view/homedos.php');
        
    } elseif(isset($_POST['comentario5'])) {        
        $idCentro  = $DaoCentro->buscarCenComercial('PLAZA CENTRAL')->getId();
        $idUsuario = $DaoUsu->buscarUsuarioNombre($_SESSION['usuario'])->getId();
        $coment    = $_POST['comentario5'];
        $puntaje   = $_POST['star5'];
        //crea todos los campos del comentario para la BD        
        $comentario->setNumUsuario($idUsuario);
        $comentario->setNumCentro($idCentro);
        $comentario->setComentario($coment);
        $comentario->setCalificacion($puntaje);
        //guardar el comentario en la BD
        $DaoComen->insertar($comentario);
        header('Location: ../view/homedos.php');
        
    } elseif(isset($_POST['comentario6'])) {        
        $idCentro  = $DaoCentro->buscarCenComercial('MALLPLAZA')->getId();
        $idUsuario = $DaoUsu->buscarUsuarioNombre($_SESSION['usuario'])->getId();
        $coment    = $_POST['comentario6'];
        $puntaje   = $_POST['star6'];
        //crea todos los campos del comentario para la BD        
        $comentario->setNumUsuario($idUsuario);
        $comentario->setNumCentro($idCentro);
        $comentario->setComentario($coment);
        $comentario->setCalificacion($puntaje);
        //guardar el comentario en la BD
        $DaoComen->insertar($comentario);
        header('Location: ../view/homedos.php');
    }
    
?>

