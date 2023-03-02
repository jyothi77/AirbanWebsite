
function changeImage() {
var image = document.getElementById('myImage');
if (image.src.match("bulbon")) {
  image.src = "assets/images/gr11.png";
} else {
  image.src = "assets/images/red.jpg";
}
}

function changeImage() {
  var image = document.getElementById('redimage');
  if (image.src.match("bulbon")) {
      image.src = "assets/images/gr11.png";
  } else {
      image.src = "assets/images/red.jpg";
  }
}
