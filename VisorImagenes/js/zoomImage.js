var container = document.getElementById("container");
var image = document.getElementById("image");

container.addEventListener("mousemove", function (event) {
  var containerRect = container.getBoundingClientRect();
  var x = event.clientX - containerRect.left;
  var y = event.clientY - containerRect.top;

  var offsetX = (container.offsetWidth - image.offsetWidth) / 2;
  var offsetY = (container.offsetHeight - image.offsetHeight) / 2;

  var translateX =
    ((container.offsetWidth / 2 - x) / container.offsetWidth) * 100;
  var translateY =
    ((container.offsetHeight / 2 - y) / container.offsetHeight) * 100;

  image.style.transform =
    "translate(" + translateX + "%, " + translateY + "%) scale(2)";
});

container.addEventListener("mouseleave", function () {
  image.style.transform = "translate(0%, 0%) scale(1)";
});
function zoomIn() {
  var imagen = document.getElementById("image");
  var currentWidth = imagen.offsetWidth;
  imagen.style.width = currentWidth * 1.2 + "px";
}

function zoomOut() {
  var imagen = document.getElementById("image");
  var currentWidth = imagen.offsetWidth;
  imagen.style.width = currentWidth / 1.2 + "px";
}