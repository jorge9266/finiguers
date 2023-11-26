<?php
if (isset($_POST["boton_registro"])) { 
    $db_nombre = "finiguers";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";

    $usuario_registro = $_POST["usuario_registro"];
    $email_registro = $_POST["email_registro"];
    $password_registro = $_POST["contraseña_registro"];

    
    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);

    if (mysqli_connect_error()) {
        echo "<h1>Ha ocurrido un error al conectarse a la base de datos</h1>";
    } else {
        // Evitar inyección SQL utilizando consultas preparadas
        $sql = "INSERT INTO usuarios (usuario, email, password) VALUES (?, ?,?)";
        $stmt = mysqli_prepare($conexion, $sql);

        // Vincular parámetros
        mysqli_stmt_bind_param($stmt, "sss", $usuario_registro, $email_registro, $password_registro);

        // Ejecutar la consulta
        $res = mysqli_stmt_execute($stmt);

        // Verificar si el registro fue exitoso
        if ($res) {
            session_start();
            header("Location: /server/francisco/index.php");
            exit();
        } else {
            header("Location: /server/francisco/auth.php?mensaje=Error al registrarse");
        }

        // Cerrar la consulta preparada
        mysqli_stmt_close($stmt);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
