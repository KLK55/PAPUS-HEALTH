$(buscar_datos());

function buscar_datos(consulta){
    $.ajax({
        url: 'Add/buscar.php' , 
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}


// Función para abrir o cerrar el menú desplegable
function toggleMenu() {
    const menuDropdown = document.querySelector('.menu-dropdown');
    menuDropdown.classList.toggle('menu-active');
}

// Agrega un evento de clic al botón de menú desplegable
const menuButton = document.getElementById('menuButton');
menuButton.addEventListener('click', toggleMenu);
