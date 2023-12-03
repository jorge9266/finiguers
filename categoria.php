<?php require "views/head.php" ?>
<?php require "views/header.php" ?>


<div class="breadcrumb">
    <a href="index.php">Inicio</a> / <span>Ropa</span>
</div>


<section class="categoria">
    <h1>Ropa</h1>
    <form class="search-form">
        <input type="text" placeholder="Buscar productos">
        <button type="submit">Buscar</button>
    </form>
</section>


<section class="listado">

    <div class="producto">
        <a href="producto.php">
            <img src="static/img/camiseta-frontal.jpg">
            <h3>Camiseta basica</h3>
            <p class="precio">29.99€</p>
            <p class="disponibilidad">Disponible</p>
            <button>Agregar al Carrito</button>
        </a>
    </div>


    <div class="producto">
        <a href="producto.php">
            <img src="static/img/camiseta-frontal.jpg">
            <h3>Camiseta basica</h3>
            <p class="precio">19.99€</p>
            <p class="disponibilidad fuera-de-stock">Agotado</p>
            <button disabled>Agotado</button>
        </a>
    </div>
    <div class="producto">
        <a href="producto.php">
            <img src="static/img/camiseta-frontal.jpg">
            <h3>Camiseta basica</h3>
            <p class="precio">29.99€</p>
            <p class="disponibilidad">Disponible</p>
            <button>Agregar al Carrito</button>
        </a>
    </div>
    <div class="producto">
        <a href="producto.php">
            <img src="static/img/camiseta-frontal.jpg">
            <h3>Camiseta basica</h3>
            <p class="precio">19.99€</p>
            <p class="disponibilidad fuera-de-stock">Agotado</p>
            <button disabled>Agotado</button>
        </a>
    </div>
    <div class="producto">
        <a href="producto.php">
            <img src="static/img/camiseta-frontal.jpg">
            <h3>Camiseta basica</h3>
            <p class="precio">29.99€</p>
            <p class="disponibilidad">Disponible</p>
            <button>Agregar al Carrito</button>
        </a>
    </div>




    <!-- Agrega más productos según sea necesario -->
</section>

<!-- paginacion -->
<div class="paginacion">
    <span class="current-page"><a href="categoria.php">1</a><span>
            <span class="separador">...</span>
            <span><a href="categoria.php">5</a></span>
            <span><a href="categoria.php">6</a></span>
            <span class="siguiente-pagina"><a href="categoria.php">Siguiente</a></span>
</div>


<?php require "views/footer.php" ?>