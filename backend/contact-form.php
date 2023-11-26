<?php
if (isset($_GET["boton"])) {
    $db_nombre = "finiguers";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $name = $_GET["nombre"];
    $email = $_GET["email"];
    $message = $_GET["mensaje"];

    // Crear conexión
    $conexion = mysqli_connect($db_host, $db_user, $db_pass);

    // Verificar conexión
    if (mysqli_connect_error()) {
        echo "<h1>Ha ocurrido un error al conectarse a la base de datos</h1>";
    } else {
        echo "<h1>Has entrado a la base de datos</h1>";
    }
    mysqli_select_db($conexion, $db_nombre);

    mysqli_set_charset($conexion, "utf8");

    $consulta = "INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$name', '$email', '$message')";

    if ($res = mysqli_query($conexion, $consulta) == true) {
        session_start();
        header("Location: /server/francisco/contact.php?mensaje=Gracias por enviar tu comentario");
    } else {
        echo "HA OCURRIDO UN ERROR";
    }
}

?>
