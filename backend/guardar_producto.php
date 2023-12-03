<?php
$db_nombre = "finiguers";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$conexion = mysqli_connect($db_host, $db_user, $db_pass);

mysqli_select_db($conexion, $db_nombre);
mysqli_set_charset($conexion, "utf8");

if (isset($_POST["botonAñadir"])){
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];
  $stock = $_POST["stock"];
  $fecha = $_POST["fecha_creacion"];

  $consulta = "INSERT INTO productos (nombre, descripcion, precio, stock,fecha_creacion) VALUES ('$nombre', '$descripcion',  '$precio', '$stock','$fecha')";
  $resultado = mysqli_query($conexion, $consulta);

  if ($resultado) {
    header("Location: ../perfil.php?mensaje=<p>Producto añadido correctamente</p>");
    exit;
  } else {
    header("Location: ../perfil.php?mensaje=<p>Error al añadir el producto</p>");
    exit;
  }
}

mysqli_close($conexion);
?>
