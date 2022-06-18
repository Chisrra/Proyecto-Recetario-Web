/*
// -> WINDOW.ONLOAD <-
//Reducir nombre de usuario cuando rebase cierto número de caracteres
var user = document.getElementById("nom_u");
var creadores = document.querySelectorAll(".autor");

window.onload = function() {
    if (user.textContent.length > 13) {
        let comp = "";
        for (let i=0; i<13; i++) {
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
} */

//Tres puntos en descripción breve al llegar al límite
var desc = document.querySelectorAll(".descripcion");
window.onload = function() {
    desc.forEach(element => {
        if (element.textContent.length >= 89) {
            element.textContent += "...";
        }
    });
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

//Eliminar registro
//evento de los botónes
const e_btn = document.getElementsByClassName("elim");
var name = "";
var ar = new Array(e_btn.length);
var pos;
const e_val = document.getElementsByClassName("hiden_value");

for (var i=0; i<e_btn.length; i++) {
    ar[i] = e_btn[i].getAttribute("value");
    e_btn[i].addEventListener('click', function() {
        var val = this.getAttribute("value");
        var e_txt = document.getElementById("e_txt");
        e_txt.textContent += '"' + val + '"?';
    
        document.getElementById("eliminar_r").classList.toggle("e_visible");
        name = val;
        for (var j=0; j<e_btn.length; j++) {
            if (ar[j] == name) pos = j;
        }
        e_val[pos].click();
    });
    e_val[i].addEventListener('click', function() {
        pos = this.getAttribute("value")
        console.log(pos);
    })
}
//evento del botón "cancelar"
document.getElementById("cancel").onclick = function() {
    document.getElementById("eliminar_r").classList.toggle("e_visible");
    setTimeout(() => {
        document.getElementById("e_txt").textContent = "¿Está seguro de eliminar la receta ";
    }, 300);
}
//evento de mandar id a EliminarReceta.php
document.getElementById("delete").onclick = function() {
    document.getElementById("delete").value = pos;
}