<?php 
    session_start();
    if (!isset($_SESSION['usuario'])) {
            header('Location: ../index.php');
    }
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
    <meta content='minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no' name='viewport' />
</head>
<body  class="F12">
    <div class="arriba">		
        <div class="arribauno">
            <a href="../index.php"><img class="logo" src="../img/logotres.png"></a>
        </div>
        <div class="arribados">
            <ul>
                <li><a href="portal.html">🖌️ ACCESIBILIDAD</a></li>
                <li><a href="http://www.cartoonnetwork.com.co/" target="_blank">&#127918; PORTAL DE NIÑOS</a></li>
                <li><a href="../controller/control_salir.php" >&#128100; SALIR</a></li>
                <li><a><?php echo 'usuario: '.$_SESSION['usuario']; ?></a></li>
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
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="http://www.multiplaza.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <h3>Calificación:</h3>
                    <!-- Consulta el promedio de la calificación del centro comercial -->
                    <?php 
                        $DAOComent = new DAOComentarios();
                        $puntaje = $DAOComent->promedioPuntaje('MULTIPLAZA');
                        echo $puntaje;
                    ?>                   
                </div>
            </div>	
            
            <div class="comentarios">
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
                <form method="post" action="../controller/control_comentarios.php">
                    <div class="rating">
                        <h3>Votación:</h3>
                        <input type="radio" name="star1" value="1">
                        <input type="radio" name="star1" value="2">
                        <input type="radio" name="star1" value="3">
                        <input type="radio" name="star1" value="4">
                        <input type="radio" name="star1" value="5" checked>
                    </div>
                    <h3>Comentar &#9998;</h3>
                    <textarea rows="6" cols="70" name="comentario1" class="comentario"></textarea>
                    <input type="submit" name="Enviar" value="Enviar &#128236;">
		</form>
        
            </div>	
	</div>
		
        <div class="a" >
            <div class="cuauno">
                <div class="unouno" >
                    <img class="imagen" src="../img/plazauno.png">
                </div>
                <div class="unodos" >
                    <h2>PLAZA DE LAS AMERICAS</h2>
                    <h3>Cra. 71d #6 - 94 Sur</h3>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="https://www.plazadelasamericas.com.co/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <h3>Calificación:</h3>
                    <!-- Consulta el promedio de la calificación del centro comercial -->
                    <?php 
                        $DAOComent = new DAOComentarios();
                        $puntaje = $DAOComent->promedioPuntaje('PLAZA DE LAS AMERICAS');
                        echo $puntaje;
                    ?>                   
                </div>
            </div>		
            <div class="comentarios">
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
                <form method="post" action="../controller/control_comentarios.php">
                    <div class="rating">
                        <br>
                        <h3>Votación:</h3>
                        <input type="radio" name="star2" value="1">
                        <input type="radio" name="star2" value="2">
                        <input type="radio" name="star2" value="3">
                        <input type="radio" name="star2" value="4">
                        <input type="radio" name="star2" value="5" checked>
                    </div>
                    <h3>Comentar &#9998;</h3>
                    <textarea rows="6" cols="70" name="comentario2" class="comentario"></textarea>
                    <input type="submit" name="Enviar" value="Enviar &#128236;">
		</form>
            </div>	
	</div>
    </div>

    <div class="padre">
        <div class="a" >
            <div class="cuauno">
                <div class="unouno" >
                    <img class="imagen" src="../img/granestacionuno.png">
                </div>
                <div class="unodos" >
                    <h2>GRAN ESTACION</h2>
                    <h3>Av. Calle 26 #62 - 47</h3>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="http://www.granestacion.com.co/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <h3>Calificación:</h3>
                    <!-- Consulta el promedio de la calificación del centro comercial -->
                    <?php 
                        $DAOComent = new DAOComentarios();
                        $puntaje = $DAOComent->promedioPuntaje('GRAN ESTACION');
                        echo $puntaje;
                    ?>                   
                </div>
            </div>		
            <div class="comentarios">
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
                <form method="post" action="../controller/control_comentarios.php">
                    <div class="rating">
                        <h3>Votación:</h3>
                        <input type="radio" name="star3" value="1">
                        <input type="radio" name="star3" value="2">
                        <input type="radio" name="star3" value="3">
                        <input type="radio" name="star3" value="4">
                        <input type="radio" name="star3" value="5" checked>
                    </div>
                    <h3>Comentar &#9998;</h3>
                    <textarea rows="6" cols="70" name="comentario3" class="comentario"></textarea>
                    <input type="submit" name="Enviar" value="Enviar &#128236;">
		</form>
            </div>	
	</div>
		
        <div class="a" >
            <div class="cuauno">
                <div class="unouno" >
                    <img class="imagen" src="../img/hayuelosdos.png">
                </div>
                <div class="unodos" >
                    <h2>HAYUELOS</h2>
                    <h3>Cl. 20 #82 - 52</h3>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="https://www.hayueloscc.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <h3>Calificación:</h3>
                    <!-- Consulta el promedio de la calificación del centro comercial -->
                    <?php 
                        $DAOComent = new DAOComentarios();
                        $puntaje = $DAOComent->promedioPuntaje('HAYUELOS');
                        echo $puntaje;
                    ?>                   
                </div>
            </div>		
            <div class="comentarios">
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
                <form method="post" action="../controller/control_comentarios.php">
                    <div class="rating">
                        <br>
                        <h3>Votación:</h3>
                        <input type="radio" name="star4" value="1">
                        <input type="radio" name="star4" value="2">
                        <input type="radio" name="star4" value="3">
                        <input type="radio" name="star4" value="4">
                        <input type="radio" name="star4" value="5" checked>
                    </div>
                    <h3>Comentar &#9998;</h3>
                    <textarea rows="6" cols="70" name="comentario4" class="comentario"></textarea>
                    <input type="submit" name="Enviar" value="Enviar &#128236;">
		</form>
            </div>	
	</div>
    </div>
        
    <div class="padre">
        <div class="a" >
            <div class="cuauno">
                <div class="unouno" >
                    <img class="imagen" src="../img/plazacentraldos.png">
                </div>
                <div class="unodos" >
                    <h2>PLAZA CENTRAL</h2>
                    <h3>Cra. 65 #11 - 50</h3>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="http://ccplazacentral.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <h3>Calificación:</h3>
                    <!-- Consulta el promedio de la calificación del centro comercial -->
                    <?php 
                        $DAOComent = new DAOComentarios();
                        $puntaje = $DAOComent->promedioPuntaje('PLAZA CENTRAL');
                        echo $puntaje;
                    ?>                   
                </div>
            </div>		
            <div class="comentarios">
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
                <form method="post" action="../controller/control_comentarios.php">
                    <div class="rating">
                        <h3>Votación:</h3>
                        <input type="radio" name="star5" value="1">
                        <input type="radio" name="star5" value="2">
                        <input type="radio" name="star5" value="3">
                        <input type="radio" name="star5" value="4">
                        <input type="radio" name="star5" value="5" checked>
                    </div>
                    <h3>Comentar &#9998;</h3>
                    <textarea rows="6" cols="70" name="comentario5" class="comentario"></textarea>
                    <input type="submit" name="Enviar" value="Enviar &#128236;">
		</form>
            </div>	
	</div>
		
        <div class="a" >
            <div class="cuauno">
                <div class="unouno" >
                    <img class="imagen" src="../img/calimauno.png">
                </div>
                <div class="unodos" >
                    <h2>MALLPLAZA</h2>
                    <h3>Avenida Carrera 30 #19</h3>
                    <a style="color: #FF8000; font-weight: bold;" class="mas" href="https://www.mallplaza.com/" target="_blank">&#128722; SITIO OFICIAL...</a>
                    <h3>Calificación:</h3>
                    <!-- Consulta el promedio de la calificación del centro comercial -->
                    <?php 
                        $DAOComent = new DAOComentarios();
                        $puntaje = $DAOComent->promedioPuntaje('MALLPLAZA');
                        echo $puntaje;
                    ?>                   
                </div>
            </div>		
            <div class="comentarios">
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
                <form method="post" action="../controller/control_comentarios.php">
                    <div class="rating">
                        <br>
                        <h3>Votación:</h3>
                        <input type="radio" name="star6" value="1">
                        <input type="radio" name="star6" value="2">
                        <input type="radio" name="star6" value="3">
                        <input type="radio" name="star6" value="4">
                        <input type="radio" name="star6" value="5" checked>
                    </div>
                    <h3>Comentar &#9998;</h3>
                    <textarea rows="6" cols="70" name="comentario6" class="comentario"></textarea>
                    <input type="submit" name="Enviar" value="Enviar &#128236;">
		</form>
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