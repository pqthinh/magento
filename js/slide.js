var slideIndex = 1;
showSlides(slideIndex, "mySlides");
showSlides(slideIndex + 1, "mySlidesAdmin");

function plusSlides(n, classBlockSlide) {
  showSlides((slideIndex += n), classBlockSlide);
}

function currentSlide(n, classBlockSlide) {
  showSlides((slideIndex = n), classBlockSlide);
}
function showSlides(n, classBlockSlide) {
  var i;
  var slides = document.getElementsByClassName(classBlockSlide);
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
