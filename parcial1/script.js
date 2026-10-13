const mensaje = document.querySelector("#mensaje");
const botonConfirmar = document.querySelector("#btn-confirmar");

function confirmarEncargo() {
    mensaje.textContent = "Encargo recibido - te atiende Rodrigo Wilder Lima Canaviri";
    mensaje.classList.remove("oculto");
  }
  
  botonConfirmar.addEventListener("click", confirmarEncargo);
  