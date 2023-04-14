document.getElementById("btn__inicar-sesion"). addEventListener("click", IniciarSesion); //Esto es para darle función al botón Inicar Sesión con un click
document.getElementById("btn__registrarse"). addEventListener("click", register); //Esto es para darle función al botón registrarse con un click
window.addEventListener("resize", anchoPagina); //Esto es para manejar el ancho de la página


//Declaración de Variables
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login"); //L variable formulario es igual a la clase formulario__login que esta en el html
var formulario_register = document.querySelector(".formulario__register");//Igualmente pero con el formulario__register
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block"; //recordar que caja trasera es el cuadro azul
    }else{
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0";
    }
}

anchoPagina();


function IniciarSesion(){ 
   if (window.innerWidth >850){ //Esto es para prevenir si la pantalla se minimiza el formulario se mantenga
    
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px"; //Esto es para que el formulario vaya de un lado a otro
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1"; 
    caja_trasera_login.style.opacity = "1"; //Esto es la velocidad en la que el texto desaparece y aparece

   }else{//Cuando este más pequeño el formulario tendra estas características
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "0px"; 
    formulario_login.style.display = "block";
    caja_trasera_register.style.display = "block"; 
    caja_trasera_login.style.opacity = "none"; 

   }
}

function register(){ 
    if(window.innerWidth >850){
        
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px"; 
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0"; 
    caja_trasera_login.style.opacity = "1"; 

    }else{
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "0px"; 
    formulario_login.style.display = "none";
    caja_trasera_register.style.display = "none"; 
    caja_trasera_login.style.opacity = "block";
    caja_trasera_login.style.opacity = "1";
    }

    

}