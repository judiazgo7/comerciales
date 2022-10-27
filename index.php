<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: view/home.php');
	} else {
            header('Location: view/homedos.php');
        }
?>