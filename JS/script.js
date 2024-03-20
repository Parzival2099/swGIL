function leerCorreo(id1, id2, id3) {
    let correo = document.getElementById(id1).value;
    document.getElementById(id2).innerHTML = correo;
    document.getElementById(id3).innerHTML = correo;
}