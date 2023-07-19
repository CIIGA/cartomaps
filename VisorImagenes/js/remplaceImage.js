function cambiarImagen(rutaImagen) {
    var image = document.getElementById('image');
    image.src = rutaImagen;
}

var btn1 = document.getElementById('div-btn1');
var btn2 = document.getElementById('div-btn2');
var btn3 = document.getElementById('div-btn3');
var btn4 = document.getElementById('div-btn4');

btn1.addEventListener('click', function () {
    cambiarImagen('img/101-20-216-08-00-0000_Oblcompleta_1.png');
});

btn2.addEventListener('click', function () {
    cambiarImagen('img/101-20-216-08-00-0000_Oblcompleta_2.png');
});

btn3.addEventListener('click', function () {
    cambiarImagen('img/101-20-216-08-00-0000_Oblcompleta_3.png');
});

btn4.addEventListener('click', function () {
    cambiarImagen('img/101-20-216-08-00-0000_Oblcompleta_4.png');
});