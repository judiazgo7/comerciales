<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mensaje del Servidor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
    <div class="w3-container w3-red">
        <h1><?php echo $_GET['mensaje']; ?></h1>
	<a href="../index.php">Volver</a>
	</div>
</body>
</html>