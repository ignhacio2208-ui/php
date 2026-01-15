<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>

<h1>Institución Educativa</h1>

<nav>
    <a href="index.php?seccion=Inicio">Inicio</a> |
    <a href="index.php?seccion=Unidades">Unidades</a> |
    <a href="index.php?seccion=Contacto">Contacto</a>
</nav>

<hr>

<?php
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
    echo "<h2>Sección seleccionada: $seccion</h2>";
} else {
    echo "<h2>Bienvenido al sitio web</h2>";
}
?>

<hr>

<h2>Formulario de Contacto</h2>

<form action="contacto.php" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Correo electrónico:</label><br>
    <input type="email" name="correo"><br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
