
const botonModoOscuro = document.querySelector('#modo-oscuro');
const botonHamburguesa = document.querySelector('#hamburguesa');
const menu = document.querySelector('#menu');


function cambiarModo() {
  document.body.classList.toggle('modo-oscuro');

}

function abrirCerrarMenu() {
  menu.classList.toggle('nav-abierto');

}


botonModoOscuro.addEventListener('click', cambiarModo);
botonHamburguesa.addEventListener('click', abrirCerrarMenu);