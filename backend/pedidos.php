<?php

$db_nombre = "finiguers";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$conexion = mysqli_connect($db_host, $db_user, $db_pass);
mysqli_select_db($conexion, $db_nombre);
mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM pedidos";
$res = mysqli_query($conexion, $consulta);

if ($res) {
    echo "<table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Fecha de Pedido</th>
                </tr>
            </thead>
            <tbody>";

    while ($fila = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>{$fila['cliente']}</td>
                <td>{$fila['producto']}</td>
                <td>{$fila['cantidad']}</td>
                <td>{$fila['total']}</td>
                <td>{$fila['fecha_pedido']}</td>
            </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No se encontraron pedidos";
}

mysqli_close($conexion);
?>