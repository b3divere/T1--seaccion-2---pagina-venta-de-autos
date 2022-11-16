let abrirPopup = document.getElementsByClassName('abrir-popup');

let overlay = document.getElementById('overlay');

let popup = document.getElementById('popup');

let cerrarPopup = document.getElementById('cerrar-popup');

window.addEventListener('click', function(){
    overlay.classList.add('active');
});