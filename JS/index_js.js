// -> WINDOW.ONLOAD <-
//Reducir nombre de usuario cuando rebase cierto número de caracteres
var user = document.getElementById("nom_u");

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