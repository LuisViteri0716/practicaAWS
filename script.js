// script.js - Validación y gestión de formularios

// script.js - Validación y gestión de formularios


  
// Selecciona el formulario de registro y agrega un evento para manejar el envío
document.getElementById("registerForm").addEventListener("submit", function (e) {
  const username = document.getElementById("registerUsername").value;
  const email = document.getElementById("registerEmail").value;
  const password = document.getElementById("registerPassword").value;

  if (username === "" || email === "" || password === "") {
    alert("Por favor completa todos los campos.");
    e.preventDefault();
  } 
}
);
