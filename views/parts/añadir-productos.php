<div id="modalAñadirProductos">
  <div class="modal">
    <div class="cabecera">
      <h5>Añadir Producto</h5>
      <button type="button" id="botonCerrar">&times;</button>
    </div>
    <div>
      <form action="backend/guardar_producto.php" method="post" class="añadir-articulo">
        <table>
          <tr>
            <td><label for="nombre">Nombre del Producto:</label></td>
            <td><input type="text" id="nombre" name="nombre" required></td>
          </tr>
          <tr>
            <td><label for="descripcion">Descripción:</label></td>
            <td><input type="text" id="descripcion" name="descripcion" required></td>
          </tr>
          <tr>
            <td><label for="precio">Precio:</label></td>
            <td><input type="number" id="precio" name="precio" required></td>
          </tr>
          <tr>
            <td><label for="stock">Stock:</label></td>
            <td><input type="number" id="stock" name="stock" required></td>
          </tr>
          <tr>
            <td><label for="fecha_creacion">Fecha de Creación:</label></td>
            <td><input type="date" id="fecha_creacion" name="fecha_creacion" required></td>
          </tr>
          <tr>
            <td colspan="2">
              <button type="submit" class="añadir" name="botonAñadir">Guardar Producto</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
