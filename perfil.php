<?php require "views/head.php" ?>
<?php require "views/header.php" ?>

<section class="seccion-productos">
  <h2>Productos Activos</h2>
  <?php
  if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
    echo $mensaje;
  } ?>

  <button type="button" id="botonAñadirArticulo">Añadir Producto</button>

  <?php include('views/parts/añadir-productos.php'); ?>

  <?php include('backend/productos.php'); ?>

</section>

<section class="seccion-pedidos">
  <h2>Últimos Pedidos</h2>
  <table>
    <?php include('backend/pedidos.php'); ?>
  </table>
</section>

<?php require "views/footer.php" ?>