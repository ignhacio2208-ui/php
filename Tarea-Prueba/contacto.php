<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Contacto</title>
</head>
<body>

<h1>Datos Recibidos</h1>

<?php
if (isset($_POST['nombre']) && isset($_POST['correo'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
} else {
    echo "<p>No se recibieron datos.</p>";
}
?>

<br>
<a href="index.php">Volver a la página principal</a>

</body>
</html>
