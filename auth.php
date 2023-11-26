<?php require "views/head.php" ?>
<?php require "views/header.php" ?>
<main>
    <div class="auth">
        <form action="backend/login.php" class="authForm" method="post">
            <h2>Iniciar Sesión</h2>
            <?php if (isset($mensaje_error)) { ?>
                <p style="color: red;"><?php echo $mensaje_error; ?></p>
            <?php } ?>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <button type="submit" name="boton" id="boton">Iniciar Sesión</button>

            <p>¿Se te ha olvidado la contraseña? <a href="#">Recupérala aquí</a></p>

        </form>

        <form action="backend/register.php" class="authForm" method="post">
            <h2>Registrarse</h2>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario_registro" name="usuario_registro" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email_registro" name="email_registro" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña_registro" name="contraseña_registro" required>

            <button type="submit" name="boton_registro" id="boton_registro">Registrarse</button>

            <?php
            // Verificar si hay un mensaje en la URL
            if (isset($_GET['mensaje'])) {
                $mensaje = $_GET['mensaje'];
                echo '<p>' . $mensaje . '</p>';
            }
            ?>
        
        </form>
    </div>
</main>
<?php require "views/footer.php" ?>