<?php
if (isset($_SESSION["usuario"])) {
    $nombre_usuario = $_SESSION["usuario"];
?>
    <header>
        <nav>
            <ul>
                <li>
                    <ul>
                        <li><a href="#">Hombre</a></li>
                        <li><a href="#">Mujer</a></li>
                        <li><a href="#">Niños</a></li>
                    </ul>
                </li>
                <li><a href="index.php"><img src="./static/img/favicon.ico" alt="icono"></a></li>
                <li><a href="perfil.php" id="menu_usuario">¡Hola, <?= $nombre_usuario ?>!</a><a href="backend/logout.php">Desconectarse!</a></li>
            </ul>
            <ul class="categorias-barra">
                <li><a href="categoria.php">Ropa</a></li>
                <li><a href="categoria.php">Zapatos</a></li>
                <li><a href="categoria.php">Lo Ultimo</a></li>
                <li><a href="categoria.php">Accesorios</a></li>
                <li class="busqueda">
                    <button type="submit" class="busqueda" id="btnBusqueda"><img src="static/img/search.svg" alt="" class="busqueda"></button>
                    <input type="search" name="busqueda" placeholder="Buscar..." required>
                </li>
            </ul>
        </nav>
        <hr>
    </header>
<?php
} else {
?>
    <header>
        <nav>
            <ul>
                <li>
                    <ul>
                        <li><a href="#">Hombre</a></li>
                        <li><a href="#">Mujer</a></li>
                        <li><a href="#">Niños</a></li>
                    </ul>
                </li>
                <li><a href="index.php"><img src="./static/img/favicon.ico" alt="icono"></a></li>
                <li><a href="auth.php" id="menu_usuario">Menu Usuario</a></li>
            </ul>
            <ul class="categorias-barra">
                <li><a href="categoria.php">Ropa</a></li>
                <li><a href="categoria.php">Zapatos</a></li>
                <li><a href="categoria.php">Lo Ultimo</a></li>
                <li><a href="categoria.php">Accesorios</a></li>
                <li class="busqueda">
                    <button type="submit" class="busqueda" id="btnBusqueda"><img src="static/img/search.svg" alt="" class="busqueda"></button>
                    <input type="search" name="busqueda" placeholder="Buscar..." required>
                </li>
            </ul>
        </nav>
        <hr>
    </header>



<?php
}
?>