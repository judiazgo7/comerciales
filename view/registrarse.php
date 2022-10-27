<!-- Página que muestra el formulario para registrar un usuario -->
<!-- Página que muestra el formulario para registrar un usuario -->
<!-- Página que muestra el formulario para registrar un usuario -->

﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/estiloIniciarRegis.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="icon" type="text/png" href="../img/logotres.png">
    <meta charset="utf-8">
    <title>Registrarse</title>
</head>
<body>
    <div class="arriba">		
	<div class="arribauno">
            <a href="../index.html"><img class="logo" src="../img/logotres.png"></a>
	</div>
	<div class="arribados">
            <ul>
    		<li class="inicio"><a href="../index.php">&#127968; INICIO</a></li>
    		<li><a href="ingresar.php">🚪🚶 INICIAR SESIÓN</a></li>
    		<li><a href="portal.html">🖌️ ACCESIBILIDAD</a></li>
            </ul>
	</div>
    </div>

    <form class="login" method="post" action="../controller/control_registrar.php">
	<div>
            <h2>Registrarse</h2>
            <label>Correo electronico:
		<input class="text" type="text" name="correo" placeholder="ejemplo@gmail.com" required autocomplete="off">
            </label>
	</div>
	
        <div>
            <label>Usuario:
		<input class="text" type="text" name="usuario" placeholder="Usuario" required autocomplete="off">
            </label>
	</div>
	
        <div>
            <label>Contraseña:
		<input class="text" type="password" name="password" placeholder="Password" required autocomplete="off">
		<br>
            	<a href="ingresar.php">Iniciar Sesión</a>
            </label>
	</div>
	
        <div align="center">
            <input type="submit" name="Registrarse" value="Aceptar &#128236;">
	</div>
    </form>

<footer class="footer">
    <p>© 2018 All rights reserved.</p>
    <a target="_blank" href="https://www.facebook.com/Centros-Comerciales-165947124076328/?modal=admin_todo_tour"><img class="social" src="../img/facebook.png"></a>
    <a target="_blank" href="https://twitter.com/CentrosComerci1"><img class="social twitter" src="../img/twitter.png"></a>
</footer>
  
</body>
</html>