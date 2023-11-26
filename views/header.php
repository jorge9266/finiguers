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
                <li><a href="#">Ropa</a></li>
                <li><a href="#">Zapatos</a></li>
                <li><a href="#">Lo Ultimo</a></li>
                <li><a href="#">Accesorios</a></li>
                <li class="busqueda">
                    <button type="submit" class="busqueda" id="btnBusqueda"><img src="static/img/search.svg" alt="" class="busqueda"></button>
                    <input type="search" src="" alt="">
                </li>
            </ul>
        </nav>
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
                <li><a href="#">Ropa</a></li>
                <li><a href="#">Zapatos</a></li>
                <li><a href="#">Lo Ultimo</a></li>
                <li><a href="#">Accesorios</a></li>
                <li class="busqueda">
                    <button type="submit" class="busqueda" id="btnBusqueda"><img src="static/img/search.svg" alt="" class="busqueda"></button>
                    <input type="search" src="" alt="">
                </li>
            </ul>
        </nav>
    </header>

        
    
<?php
}
?>