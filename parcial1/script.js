const mensaje = document.querySelector("#mensaje");
const botonConfirmar = document.querySelector("#btn-confirmar");

function confirmarEncargo() {
  mensaje.textContent = "Encargo recibido - te atiende Tu Nombre Completo";
  mensaje.classList.remove("oculto");
}

botonConfirmar.addEventListener("click", confirmarEncargo);
