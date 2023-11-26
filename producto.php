<?php require "views/head.php" ?>

<?php require "views/header.php" ?>

<main class="articulo">
    <div class="contenedor">
        <div class="fotos">
            <img src="static/img/camiseta-frontal.jpg" alt="" width="512" height="512">
            <div class="galeria">
                <img src="static/img/camiseta-lateral.jpg" alt="">
                <img src="static/img/camiseta-trasero.jpg" alt="">
                
            </div>
        </div>
        <section>
            <h1>Camiseta basica</h1>
            <h2>30.00€</h2>
            <table id="componentesTabla" style="display: none;">
                <thead>
                    <tr>
                        <th>Componente</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody
                    <tr>
                        <td>Algodón</td>
                        <td>60%</td>
                    </tr>
                    <tr>
                        <td>Poliéster</td>
                        <td>30%</td>
                    </tr>
                    <tr>
                        <td>Elastano</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
            <h3>Talla</h3>
            <select>
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
            </select>
            <div>
                <button>Añadir al carrito</button>
            </div>
            <h4>Añadir a favoritos</h4>
            <h5>Categorias:
                <span>Camiseta</span>
                <span>Hombre</span>
            </h5>
            <h5>Tag:<span> Camisetas</span></h5>
            <h5>Compartir!</h5>
            <button onclick="toggleTable()">Mostrar/ocultar tabla componentes</button>
        </section>
    </div>
    <div class="contenedor">
        <div>
            <h2>Descripcion</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur veritatis amet perspiciatis tenetur? Ab harum maxime quaerat, molestiae hic quod accusantium eum veritatis dolores! Minus eligendi voluptate adipisci libero porro.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur veritatis amet perspiciatis tenetur? Ab harum maxime quaerat, molestiae hic quod accusantium eum veritatis dolores! Minus eligendi voluptate adipisci libero porro.</p>
        </div>
        <div>
            <h2>Opiniones</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur veritatis amet perspiciatis tenetur? Ab harum maxime quaerat, molestiae hic quod accusantium eum veritatis dolores! Minus eligendi voluptate adipisci libero porro.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur veritatis amet perspiciatis tenetur? Ab harum maxime quaerat, molestiae hic quod accusantium eum veritatis dolores! Minus eligendi voluptate adipisci libero porro.</p>
        </div>
    </div>

    
</main>


<?php require "views/footer.php" ?>