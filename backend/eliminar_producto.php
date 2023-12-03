<?php
$db_nombre = "finiguers";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";


$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);

mysqli_set_charset($conexion, "utf8");

$id_producto = $_GET['id'];

$consulta = "DELETE FROM productos WHERE id = $id_producto";

$res = mysqli_query($conexion, $consulta);

if ($res) {
    $mensaje = "<p>Producto eliminado exitosamente.</p>";
} else {
    $mensaje = "<p>Error al eliminar el producto.</p>";
}

mysqli_close($conexion);

header("Location: ../perfil.php?mensaje=" . $mensaje);
exit();

?>





