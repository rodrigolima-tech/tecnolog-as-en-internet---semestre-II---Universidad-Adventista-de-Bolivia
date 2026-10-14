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



const formulario = document.querySelector('#form-contacto');
const aviso = document.querySelector('#aviso-contacto');


formulario.addEventListener('submit', function (evento) {


  evento.preventDefault();


  const nombre = document.querySelector('#nombre').value.trim();
  const correo = document.querySelector('#correo').value.trim();
  const mensaje = document.querySelector('#mensaje').value.trim();


  aviso.textContent = '';
  aviso.className = 'aviso';


  if (nombre === '') {
    aviso.textContent = 'No te olvides de escribir tu nombre completo para saber quien escribe.';
    aviso.classList.add('error');
    return;
  }


  if (correo === '') {
    aviso.textContent = 'Necesitamos tu correo electronico para poder responderte.';
    aviso.classList.add('error');
    return;
  }


  if (!correo.includes('@')) {
    aviso.textContent = 'Revisa tu correo, le falta la arroba (@). Por ejemplo: usuario@correo.com';
    aviso.classList.add('error');
    return;
  }


  if (mensaje === '') {
    aviso.textContent = 'Cuentanos tu consulta, escribe tu mensaje antes de enviar.';
    aviso.classList.add('error');
    return;
  }


  aviso.textContent = 'Listo, completaste todos los campos correctamente. Gracias por contactarte con la tienda.';
  aviso.classList.add('exito');

});
