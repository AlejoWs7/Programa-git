document.getElementById("loginbt").addEventListener("click", inicio);
document.getElementById("registrarsebt").addEventListener("click", register);
window.addEventListener("resize", anchopagina);
// se generan las variables para el codigo
var contenedor_login_register = document.querySelector(
  ".contenedor_login-resgister"
);
var formulario_login = document.querySelector(".formulario-login");
var formulario_register = document.querySelector(".formulario-register");
var sombra_posterior_login = document.querySelector(".sombra_posterior-login");
var sombra_posterior_register = document.querySelector(
  ".sombra_posterior-Resgistro"
);

function anchopagina() {
  if (window.innerWidth > 850) {
    sombra_posterior_login.style.display = "block";
    sombra_posterior_register.style.display = "block";
  } else {
    sombra_posterior_register.style.display = "block";
    sombra_posterior_register.opacity = "1";
    sombra_posterior_login.style.display = "none";
    formulario_login.style.display = "block";
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "0px";
  }
}

anchopagina();

function inicio() {
  if (window.innerWidth > 850) {
    formulario_register.style.display = "none";
    contenedor_login_register.style = "10px";
    formulario_login.style.display = "block";
    sombra_posterior_login.style.opacity = "0";
    sombra_posterior_register.style.opacity = "1";
  } else {
    formulario_register.style.display = "none";
    contenedor_login_register.style = "10px";
    formulario_login.style.display = "block";
    sombra_posterior_register.style.display = "block";
    sombra_posterior_login.style.display = "none";
  }
}

function register() {
  if (window.innerWidth > 850) {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    sombra_posterior_register.style.opacity = "0";
    sombra_posterior_login.style.opacity = "1";
  } else {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "0px";
    formulario_login.style.display = "none";
    sombra_posterior_register.style.display = "none";
    sombra_posterior_login.style.display = "block";
    sombra_posterior_login.style.opacity = "1";
  }
}
