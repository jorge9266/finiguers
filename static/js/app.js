
// FUNCION MOSTRAR TABLA COMPONENTES PRODUCTO

function toggleTable() {
    var table = document.getElementById("componentesTabla");
    if (table.style.display === "none") {
        table.style.display = "table";
    } else {
        table.style.display = "none";
    }
}

 // JavaScript para abrir y cerrar el modal
 const botonAñadirArticulo = document.getElementById('botonAñadirArticulo');
 const botonCerrar = document.querySelectorAll('#botonCerrar');
 const modalAñadirProductos = document.getElementById('modalAñadirProductos');

 botonAñadirArticulo.addEventListener('click', () => {
    modalAñadirProductos.style.display = 'block';
 });

 botonCerrar.forEach(btn => {
   btn.addEventListener('click', () => {
    modalAñadirProductos.style.display = 'none';
   });
 });

 // Cierra el modal si se hace clic fuera de él
 window.addEventListener('click', (event) => {
   if (event.target === modalAñadirProductos) {
    modalAñadirProductos.style.display = 'none';
   }
 });



 