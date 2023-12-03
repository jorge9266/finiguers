<div id="editarProductoModal" class="modal">
    <div class="modal-content">
        <h2>Editar Producto</h2>
        <!-- Contenido del formulario aquí -->
        <?php
            $db_nombre = "finiguers";
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";

            $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);

            mysqli_set_charset($conexion, "utf8");

            $id_producto = $_GET['id'];

            $consulta_producto = "SELECT * FROM productos WHERE id = $id_producto";
            $res_producto = mysqli_query($conexion, $consulta_producto);

            if ($fila_producto = mysqli_fetch_assoc($res_producto)) {
                echo "<form action='actualizar_producto.php' class='editar-articulo' method='post'>
                        <input type='hidden' name='id' value='{$id_producto}'>
                        <label for='nombre'>Nombre:</label>
                        <input type='text' name='nombre' value='{$fila_producto['nombre']}' required>
                        <label for='descripcion'>Descripción:</label>
                        <textarea name='descripcion' required>{$fila_producto['descripcion']}</textarea>
                        <label for='precio'>Precio:</label>
                        <input type='number' name='precio' value='{$fila_producto['precio']}' required>
                        <label for='stock'>Stock:</label>
                        <input type='number' name='stock' value='{$fila_producto['stock']}' required>
                        <input type='submit' value='GuarVdar Cambios'>
                    </form>";
            } else {
                echo "<p>Producto no encontrado</p>";
            }

            // Cerrar conexión
            mysqli_close($conexion);
        ?>
        <button id="closeModalButton">Cerrar</button>
    </div>
</div>