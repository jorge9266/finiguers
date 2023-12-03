<?php

$db_nombre = "finiguers";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$conexion = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($conexion, $db_nombre);
mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM productos";
$res = mysqli_query($conexion, $consulta);

if ($res) {
    if (isset($_GET['modo']) == 'editar') {
        $id_producto_editar = $_GET['id'];
        $consulta_producto_editar = "SELECT * FROM productos WHERE id = $id_producto_editar";
        $res_producto_editar = mysqli_query($conexion, $consulta_producto_editar);

        if ($fila_editar = mysqli_fetch_assoc($res_producto_editar)) {
            echo "<form action='backend/actualizar_producto.php' method='post' class='editar-articulo'>
                    <h2>Modo Edición</h2>
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td><input type='text' name='nombre' value='{$fila_editar['nombre']}'></td>
                            <td><textarea name='descripcion'>{$fila_editar['descripcion']}</textarea></td>
                            <td><img src='{$fila_editar['imagen']}' alt='Imagen del producto'></td>
                            <td><input type='number' name='precio' value='{$fila_editar['precio']}'></td>
                            <td><input type='number' name='stock' value='{$fila_editar['stock']}'></td>
                            <td><input type='date' name='fecha_creacion' value='{$fila_editar['fecha_creacion']}'></td>
                            <td>
                                <input type='hidden' name='id' value='{$fila_editar['id']}'>
                                <button type='submit'>Guardar</button>
                                <button type='submit' class='cancelar'><a href='perfil.php' class='botonCancelar'>Cancelar</a></button>
                            </td>
                        </tr>
                    </table>
                </form>";
        }
    } else {
        echo "<table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>";

        while ($fila = mysqli_fetch_assoc($res)) {
            echo "<tr>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['descripcion']}</td>
                    <td><img src='{$fila['imagen']}' alt='Imagen del producto'></td>
                    <td>{$fila['precio']}</td>
                    <td>{$fila['stock']}</td>
                    <td>{$fila['fecha_creacion']}</td>
                    <td>
                        <a href='?modo=editar&id={$fila['id']}' class='editar'>Editar</a>
                        <a href='backend/eliminar_producto.php?id={$fila['id']}' class='eliminar'>Eliminar</a>
                    </td>
                </tr>";
        }

        echo "</tbody></table>";
    }
} else {
    echo "No se encontraron productos";
}

mysqli_close($conexion);
?>
