<?php

$db_nombre = "finiguers";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);
mysqli_set_charset($conexion, "utf8");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$fecha_creacion = $_POST['fecha_creacion'];

$consulta = "UPDATE productos SET
              nombre = '$nombre',
              descripcion = '$descripcion',
              precio = $precio,
              stock = $stock,
              fecha_creacion = '$fecha_creacion'
              WHERE id = $id";

$res = mysqli_query($conexion, $consulta);

if ($res) {
    $mensaje = "<p>Producto actualizado exitosamente.</p>";
} else {
    $mensaje = "<p>Error al actualizar el producto.</p>";
}

mysqli_close($conexion);

header("Location: ../perfil.php?mensaje=" . $mensaje);
exit();

?>



