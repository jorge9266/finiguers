
// FUNCION MOSTRAR TABLA COMPONENTES PRODUCTO

function toggleTable() {
    var table = document.getElementById("componentesTabla");
    if (table.style.display === "none") {
        table.style.display = "table";
    } else {
        table.style.display = "none";
    }
}
