var slider = {
    slideIndex:1,
    

    init: function() {
       
this.showSlides(this.slideIndex);


},
showSlides:function(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {this.slideIndex = 1;}
  if (n < 1) {this.slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[this.slideIndex-1].style.display = "block";
  dots[this.slideIndex-1].className += " active";
},
   plusSlides:function(n) {
  this.showSlides(this.slideIndex += n);
},
   currentSlide:function(n) {
  this.showSlides(this.slideIndex = n);
}   

};


slider.init();
