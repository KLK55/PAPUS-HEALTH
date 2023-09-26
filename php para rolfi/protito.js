<<<<<<< HEAD
function mostrarcon1() {
    var h1 = document.getElementById('h1');
    var h2 = document.getElementById('h2');
    var modificar1 = document.getElementById('modificar1');
    var eliminar1 = document.getElementById('eliminar1');
    var body = document.body;
    
    if (h1.style.display === 'none') {
        h1.style.display = 'block';
        modificar1.style.display = 'block';
        eliminar1.style.display = 'block';
        h2.style.display = 'none';
        body.style.backgroundColor = 'brown';
    } else {
        h1.style.display = 'none';
        modificar1.style.display = 'none';
        eliminar1.style.display = 'none';
        body.style.backgroundColor = '';
    }
}

function mostrarcon2() {
    var h1 = document.getElementById('h1');
    var h2 = document.getElementById('h2');
    var modificar2 = document.getElementById('modificar2');
    var eliminar2 = document.getElementById('eliminar2');
    var body = document.body;
    
    if (h2.style.display === 'none') {
        h2.style.display = 'block';
        modificar2.style.display = 'block';
        eliminar2.style.display = 'block';
        h1.style.display = 'none';
        body.style.backgroundColor = 'purple';
    } else {
        h2.style.display = 'none';
        modificar2.style.display = 'none';
        eliminar2.style.display = 'none';
        body.style.backgroundColor = '';
    }
=======
function mostrarcon1() {
    var h1 = document.getElementById('h1');
    var h2 = document.getElementById('h2');
    var modificar1 = document.getElementById('modificar1');
    var eliminar1 = document.getElementById('eliminar1');
    var body = document.body;
    
    if (h1.style.display === 'none') {
        h1.style.display = 'block';
        modificar1.style.display = 'block';
        eliminar1.style.display = 'block';
        h2.style.display = 'none';
        body.style.backgroundColor = 'brown';
    } else {
        h1.style.display = 'none';
        modificar1.style.display = 'none';
        eliminar1.style.display = 'none';
        body.style.backgroundColor = '';
    }
}

function mostrarcon2() {
    var h1 = document.getElementById('h1');
    var h2 = document.getElementById('h2');
    var modificar2 = document.getElementById('modificar2');
    var eliminar2 = document.getElementById('eliminar2');
    var body = document.body;
    
    if (h2.style.display === 'none') {
        h2.style.display = 'block';
        modificar2.style.display = 'block';
        eliminar2.style.display = 'block';
        h1.style.display = 'none';
        body.style.backgroundColor = 'purple';
    } else {
        h2.style.display = 'none';
        modificar2.style.display = 'none';
        eliminar2.style.display = 'none';
        body.style.backgroundColor = '';
    }
>>>>>>> 9b06a16ec8d161032977098cedb6ec226cbf98e6
}