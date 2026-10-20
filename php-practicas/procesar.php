<?php
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje  = $_POST["mensaje"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>
</head>
<body>
    <h2>Datos recibidos</h2>
    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Correo:</strong> <?php echo $correo; ?></p>
    <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
    <p><strong>Mensaje:</strong> <?php echo $mensaje; ?></p>
</body>
</html>