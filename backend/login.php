<?php
if (isset($_POST["boton"])) {
    $db_nombre = "finiguers";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);

    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);

    mysqli_stmt_execute($stmt);

    $res = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($res) > 0) {
        session_start();
        $_SESSION["usuario"] = $usuario;
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        header("Location: /server/francisco/index.php");
        exit();
    } else {
        // Los credenciales son incorrectos, mostrar mensaje de error.
        header("Location: /server/francisco/auth.php");
        $mensaje_error = "Usuario o contraseña incorrectos";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>
