<?php
 $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $pedido = $_POST["pedido"];

  echo "<h1>Pedido recibido en Salteñería El Horno</h1>";
  echo "<p>Nombre: $nombre</p>";
  echo "<p>Correo: $correo</p>";
  echo "<p>Pedido: $pedido</p>";
$carta = [
    "Salteña de pollo - Bs 6",
    "Docena de salteñas - Bs 65",
    "Refresco de mocochinchi - Bs 5"
  ];
echo "<h2>Nuestra carta</h2>";
  echo "<ul>";
  foreach ($carta as $item) {
    echo "<li>$item</li>";
  }
  echo "</ul>";
echo "<p>Te atiende RODRIGO WILDER LIMA CANAVIRI</p>";
?>

