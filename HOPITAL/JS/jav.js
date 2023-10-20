document.addEventListener('DOMContentLoaded', function () {
    var showAlertBtn = document.getElementById('showAlertBtn');
    var customAlert = document.getElementById('customAlert');
    var downloadBtn = document.querySelector('.download-btn');

    // Muestra la alerta cuando se hace clic en el botón
    showAlertBtn.onclick = function () {
        customAlert.style.display = 'block';
    }

    // Aquí puedes agregar la funcionalidad para descargar cuando se hace clic en "Descargar"
    downloadBtn.onclick = function () {
        // Ejemplo: window.location.href = 'ruta_del_archivo_a_descargar.ext';
        customAlert.style.display = 'none';  // cierra la alerta
    }

    // Cierra la alerta si se hace clic fuera del contenido (opcional)
    window.onclick = function (event) {
        if (event.target == customAlert) {
            customAlert.style.display = 'none';
        }
    }
});
