function changeImage() {
  var image = document.getElementById('imgClickAndChange');
  if (image.src.match("2")) {
      image.src ="assets/img/monroe_300x300_1.jpg";
  }else {
      image.src = "assets/img/monroe_300x300_2.jpg";
  }
}