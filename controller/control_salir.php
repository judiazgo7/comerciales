<?php 
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
        unset($_SESSION['usuario']); //destruye la sesión
    } else {
        header('Location: ../index.php');
        unset($_SESSION['usuario']); //destruye la sesión
    }
?>
