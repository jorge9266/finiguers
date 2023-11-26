<?php require "views/head.php" ?>
<?php require "views/header.php" ?>
<main class="container">
    <section>
        <h2>Contacto</h2>
        <p>¡Estamos aquí para ayudarte! Contáctanos a través de este formulario.</p>

        <form method="get" action="backend/contact-form.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" max="300" required></textarea>

            <button type="submit" name="boton" id="boton">Enviar Mensaje</button>
        </form>

        <?php
        // Verificar si hay un mensaje en la URL
        if (isset($_GET['mensaje'])) {
            $mensaje = $_GET['mensaje'];
            echo '<p>' . $mensaje . '</p>';
        }
        ?>

        <div>
            <h3>Información de Contacto</h3>
            <p><strong>Correo Electrónico:</strong> contact@finiguers.com</p>
            <p><strong>Teléfono:</strong> +34 666 000 001</p>
            <p><strong>Dirección:</strong> C. Marqués de Larios, 10, 29005 Málaga</p>
        </div>



    </section>
 
</main>

<?php require "views/footer.php" ?>