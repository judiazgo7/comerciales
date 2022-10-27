<?php 
	session_start();
	unset($_SESSION['usuario']);
    require_once('../inc/DAO_Comentarios.php');
    require_once('../inc/DAO_Usuario.php');
    require_once('../inc/Comentarios.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/estiloPrincipal.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="icon" type="text/png" href="../img/logotres.png">
    <meta charset="utf-8">
    <title>Centros Comerciales</title>

</head>
<body  class="F12">
    <div class="arriba">		
        <div class="arribauno">
            <a href="../index.php"><img class="logo" src="../img/logotres.png"></a>
        </div>
        <div class="arribados">
            <ul>
                <li><a href="ingresar.php">🚪🚶INICIAR SESIÓN</a></li>
                <li><a href="registrarse.php">&#128100; REGISTRARSE</a></li>
                <li><a href="portal.html">🖌️ ACCESIBILIDAD</a></li>
                <li><a href="http://www.cartoonnetwork.com.co/" target="_blank">&#127918; PORTAL DE NIÑOS</a></li>
            </ul>
        </div>
    </div>
    
    <div class="padre">
        <div class="a" >
            <div class="cuauno">
                <div class="unouno" >
                    <img class="imagen" src="../img/multiplaza.jpg">
                </div>
                <div class="unodos" >
                    <h2>MULTI PLAZA</h2>
                    <h3>Avenida Boyacá #13</h3>
                    <div class="rating">
                        <h3>Calificación:</h3>
                        <!-- Consulta el promedio de la calificación del centro comercial -->
                        <?php 
                            $DAOComent = new DAOComentarios();
                            $puntaje = $DAOComent->promedioPuntaje('MULTIPLAZA');
                            echo $puntaje;
                        ?>                   
                    </div>
                    <br>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="http://www.multiplaza.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                </div>
            </div>		
            <div class="comentarios">
		<h3>Comentarios &#9998;</h3>
                <!-- Esta sección consulta los comentarios del CC guardados en la BD y los muestra en una tabla -->
                <?php 
                    $DAOComent = new DAOComentarios();
                    $DAOUsu = new DAOUsuario();
                    $listaComent = $DAOComent->listarComentarios('MULTIPLAZA');
                    
                    echo "<table><tr><td>Usuario</td><td>Comentario</td><td>Calificación</td></tr>";
                    foreach ($listaComent as $coment) {
                        $usuario = $DAOUsu::buscarUsuarioId($coment->getNumUsuario());
                        echo "<tr><td>".$usuario->getNombre()."</td>
                            <td>".$coment->getComentario()."</td>
                            <td>".$coment->getCalificacion()."</td>
                            </tr>";
                    }
                    echo "</table>"
                ?>
            </div>	
	</div>
		
	<div class="a" >
            <div class="cuados">
		<div class="unouno">
                    <img class="imagen" src="../img/plazauno.png">
		</div>
		<div class="unodos">
                    <h2>PLAZA DE LAS AMERICAS</h2>
                    <h3>Cra. 71d #6 - 94 Sur</h3>
                    <div id="Estrellas"></div>
			<div class="rating">
                            <h3>Calificación:</h3>
                            <!-- Consulta el promedio de la calificación del centro comercial -->
                            <?php 
                                $DAOComent = new DAOComentarios();
                                $puntaje = $DAOComent->promedioPuntaje('PLAZA DE LAS AMERICAS');
                                echo $puntaje;
                            ?>                   
			</div>
			<br>
			<a style="color: #FF8000; font-weight: bold;" class="mas" href="https://www.plazadelasamericas.com.co/" target="_blank">&#128722; SITIO OFICIAL...</a>
			<br>
			<br>
		</div>
            </div>
            <div class="comentarios ">
		<h3>Comentarios &#9998;</h3>
                <!-- Esta sección consulta los comentarios del CC guardados en la BD y los muestra en una tabla -->
                <?php 
                    $DAOComent = new DAOComentarios();
                    $DAOUsu = new DAOUsuario();
                    $listaComent = $DAOComent->listarComentarios('PLAZA DE LAS AMERICAS');
                    
                    echo "<table><tr><td>Usuario</td><td>Comentario</td><td>Calificación</td></tr>";
                    foreach ($listaComent as $coment) {
                        $usuario = $DAOUsu::buscarUsuarioId($coment->getNumUsuario());
                        echo "<tr><td>".$usuario->getNombre()."</td>
                            <td>".$coment->getComentario()."</td>
                            <td>".$coment->getCalificacion()."</td>
                            </tr>";
                    }
                    echo "</table>"
                ?>
            </div>
	</div>
    </div>

    <div class="padre">
    	<div class="a" >
            <div class="cuauno">
		<div class="unouno">
                    <img class="imagen" src="../img/granestacionuno.png">
		</div>
		<div class="unodos">
                    <h2>GRAN ESTACION</h2>
                    <h3>Av. Calle 26 #62 - 47</h3>
                    <div class="rating">
			<h3>Calificación:</h3>
                        <!-- Consulta el promedio de la calificación del centro comercial -->
                        <?php 
                            $DAOComent = new DAOComentarios();
                            $puntaje = $DAOComent->promedioPuntaje('GRAN ESTACION');
                            echo $puntaje;
                        ?>                   
                    </div>
                    <br>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="http://www.granestacion.com.co/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <br>
                    <br>
		</div>
            </div>
            <div class="comentarios">
		<h3>Comentarios &#9998;</h3>
                <!-- Esta sección consulta los comentarios del CC guardados en la BD y los muestra en una tabla -->
                <?php 
                    $DAOComent = new DAOComentarios();
                    $DAOUsu = new DAOUsuario();
                    $listaComent = $DAOComent->listarComentarios('GRAN ESTACION');
                    
                    echo "<table><tr><td>Usuario</td><td>Comentario</td><td>Calificación</td></tr>";
                    foreach ($listaComent as $coment) {
                        $usuario = $DAOUsu::buscarUsuarioId($coment->getNumUsuario());
                        echo "<tr><td>".$usuario->getNombre()."</td>
                            <td>".$coment->getComentario()."</td>
                            <td>".$coment->getCalificacion()."</td>
                            </tr>";
                    }
                    echo "</table>"
                ?>
            </div>
        </div>
	
        <div class="a" >
            <div class="cuados">
		<div class="unouno">
                    <img class="imagen" src="../img/hayuelosdos.png">
		</div>
		<div class="unodos">
                    <h2>HAYUELOS</h2>
                    <h3>Cl. 20 #82 - 52</h3>
                    <div class="rating">
                        <h3>Calificación:</h3>
                        <!-- Consulta el promedio de la calificación del centro comercial -->
                        <?php 
                            $DAOComent = new DAOComentarios();
                            $puntaje = $DAOComent->promedioPuntaje('HAYUELOS');
                            echo $puntaje;
                        ?>                   
                    </div>
                    <br>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="https://www.hayueloscc.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <br>
		</div>
            </div>		
            
            <div class="comentarios">
		<h3>Comentarios &#9998;</h3>
                <!-- Esta sección consulta los comentarios del CC guardados en la BD y los muestra en una tabla -->
                <?php 
                    $DAOComent = new DAOComentarios();
                    $DAOUsu = new DAOUsuario();
                    $listaComent = $DAOComent->listarComentarios('HAYUELOS');
                    
                    echo "<table><tr><td>Usuario</td><td>Comentario</td><td>Calificación</td></tr>";
                    foreach ($listaComent as $coment) {
                        $usuario = $DAOUsu::buscarUsuarioId($coment->getNumUsuario());
                        echo "<tr><td>".$usuario->getNombre()."</td>
                            <td>".$coment->getComentario()."</td>
                            <td>".$coment->getCalificacion()."</td>
                            </tr>";
                    }
                    echo "</table>"
                ?>
            </div>
	</div>
    </div>

    <div class="padre">
	<div class="a">
            <div class="cuauno">
		<div class="unouno">
                    <img class="imagen" src="../img/plazacentraldos.png">
		</div>
		<div class="unodos">
                    <h2>PLAZA CENTRAL</h2>
                    <h3>Cra. 65 #11 - 50</h3>
                    <div class="rating">
			<h3>Calificación:</h3>
                        <!-- Consulta el promedio de la calificación del centro comercial -->
                        <?php 
                            $DAOComent = new DAOComentarios();
                            $puntaje = $DAOComent->promedioPuntaje('PLAZA CENTRAL');
                            echo $puntaje;
                        ?>                   
                    </div>
                    <br>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="http://ccplazacentral.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <br>
                    <br>
		</div>
            </div>
            <div class="comentarios">
		<h3>Comentarios &#9998;</h3>
                <!-- Esta sección consulta los comentarios del CC guardados en la BD y los muestra en una tabla -->
                <?php 
                    $DAOComent = new DAOComentarios();
                    $DAOUsu = new DAOUsuario();
                    $listaComent = $DAOComent->listarComentarios('PLAZA CENTRAL');
                    
                    echo "<table><tr><td>Usuario</td><td>Comentario</td><td>Calificación</td></tr>";
                    foreach ($listaComent as $coment) {
                        $usuario = $DAOUsu::buscarUsuarioId($coment->getNumUsuario());
                        echo "<tr><td>".$usuario->getNombre()."</td>
                            <td>".$coment->getComentario()."</td>
                            <td>".$coment->getCalificacion()."</td>
                            </tr>";
                    }
                    echo "</table>"
                ?>
            </div>
	</div>
	
        <div class="a">
            <div class="cuados">
		<div class="unouno">
                    <img class="imagen" src="../img/calimauno.png">
		</div>
		<div class="unodos">
                    <h2>MALLPLAZA</h2>
                    <h3>Avenida Carrera 30 #19</h3>
                    <div class="rating">
			<h3>Calificación:</h3>
                        <!-- Consulta el promedio de la calificación del centro comercial -->
                        <?php 
                            $DAOComent = new DAOComentarios();
                            $puntaje = $DAOComent->promedioPuntaje('MALLPLAZA');
                            echo $puntaje;
                        ?>                   
                    </div>
                    <br>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="https://www.mallplaza.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <br>
                    <br>
		</div>
            </div>
            <div class="comentarios">
		<h3>Comentarios &#9998;</h3>
                <!-- Esta sección consulta los comentarios del CC guardados en la BD y los muestra en una tabla -->
                <?php 
                    $DAOComent = new DAOComentarios();
                    $DAOUsu = new DAOUsuario();
                    $listaComent = $DAOComent->listarComentarios('MALLPLAZA');
                    
                    echo "<table><tr><td>Usuario</td><td>Comentario</td><td>Calificación</td></tr>";
                    foreach ($listaComent as $coment) {
                        $usuario = $DAOUsu::buscarUsuarioId($coment->getNumUsuario());
                        echo "<tr><td>".$usuario->getNombre()."</td>
                            <td>".$coment->getComentario()."</td>
                            <td>".$coment->getCalificacion()."</td>
                            </tr>";
                    }
                    echo "</table>"
                ?>
            </div>
	</div>
    </div>

<footer class="footer">
	<p>© 2022 All rights reserved.</p>
	<a target="_blank" href="https://www.facebook.com/Centros-Comerciales-165947124076328/?modal=admin_todo_tour"><img class="social" src="../img/facebook.png"></a>
	<a target="_blank" href="https://twitter.com/CentrosComerci1"><img class="social twitter" src="../img/twitter.png"></a>
</footer>
<script src="StarRating.js"></script>
<script>
		$('#Estrellas').starrr();
	</script>
</body>
</html>
