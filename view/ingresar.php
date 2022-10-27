<!--    Página que muestra el formulario de autenticación   -->
<!--    Página que muestra el formulario de autenticación   -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/estiloIniciarRegis.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="icon" type="text/png" href="../img/logotres.png">
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="arriba">		
	<div class="arribauno">
            <a href="../index.html"><img class="logo" src="../img/logotres.png"></a> 
	</div>
	<div class="arribados">
            <ul>
    		<li class="inicio"><a href="../index.php">&#127968; INICIO</a></li>
    		<li><a href="registrarse.php">&#128100; REGISTRARSE</a></li>
    		<!--<li><a href="portal.html">PORTAL DE NIÑOS</a></li>-->
    		<li><a href="portal.html">🖌️ ACCESIBILIDAD</a></li>
            </ul>
	</div>
    </div>

    <form class="login" method="post" action="../controller/control_ingresar.php">
	<div>
            <h2>Iniciar Sesión</h2>
            <br>
            <label>Usuario:
                <input class="text" type="text" name="usuario" placeholder="Usuario" required autocomplete="off">
            </label>
	</div>
	<div>
            <label>Contraseña:
		<input class="text" type="password" name="password" placeholder="Password" required autocomplete="off">
            </label>
            
            <br>
            <br>
            <a href="registrarse.php">Registrarse</a>
	</div>
	
        <div align="center">
            <input type="submit" name="Entrar" value="Aceptar &#128236;">
	</div>
    </form>

<footer class="footer">
    <p>© 2018 All rights reserved.</p>
    <a target="_blank" href="https://www.facebook.com/Centros-Comerciales-165947124076328/?modal=admin_todo_tour"><img class="social" src="../img/facebook.png"></a>
    <a target="_blank" href="https://twitter.com/CentrosComerci1"><img class="social twitter" src="../img/twitter.png"></a>
</footer>    
</body>
</html>