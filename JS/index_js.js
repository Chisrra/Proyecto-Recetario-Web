// -> WINDOW.ONLOAD <-
//Reducir nombre de usuario cuando rebase cierto número de caracteres
var user = document.getElementById("nom_u");
var creadores = document.querySelectorAll(".autor");

window.onload = function() {
    if (user.textContent.length > 15) {
        let comp = "";
        for (let i=0; i<15; i++) {
            comp += user.textContent.charAt(i);
        }
        comp += "...";
        user.textContent = comp;
    }

    creadores.forEach(creador => {
        let c = "";
        for (let i=0; i<10; i++) {
            c += creador.textContent.charAt(i);
        }
        c += "...";
        creador.textContent = c;
    });
}

//Reducir nombre de usuario cuando rebase cierto número de caracteres

window.onload = function() {
    if (user.textContent.length > 15) {
        let comp = "";
        for (let i=0; i<15; i++) {
            comp += user.textContent.charAt(i);
        }
        comp += "...";
        user.textContent = comp;
    }
}

//Efecto hover de la foto de perfil
var img = document.getElementById("perfil_img");
var edit = document.getElementById("edit_img");
img.addEventListener('mouseover', function() {
    edit.style.visibility = 'visible';
}, true);
img.addEventListener('mouseout', function() {
    edit.style.visibility = 'hidden';
}, true);

//Seleccion y envio de archivo de foto de perfil
var selec = document.getElementById("selec");
var env = document.getElementById("enviar");
img.addEventListener('click', function() {
    selec.click();
});
selec.onchange = function(e) {
    env.click();
}

//Cambio de color de texto de usuario tras dar botón menú y salir
const ham_btn = document.querySelector('#ham_btn');
const close_btn = document.querySelector('#close_btn');
ham_btn.onclick = () => {
    user.style.color = 'white';
}
close_btn.onclick = () => {
    user.style.color = 'black';
}