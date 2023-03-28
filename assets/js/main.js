/*var slideIndex = 1;
showSlides(slideIndex);

//prev/next controls
function moveSlide(n){
    showSlides(slideIndex += n);
}

//thumbnail image controls
function currentSlide(n){
    showSlides(slideIndex = n);
}

function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");

    if (n > slides.length){
        slideIndex = 1
    }
    if (n < 1){
        slideIndex = slides.length
    }
    for (i = 0; i<slides.length; i++){
        slides[i].style.display="none";
    }
    for (i = 0; i<dots.length; i++){
        dots[i].className.replace("active","");
    }

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active";

}*/

//automated

var numm = 0;
showSlides();

function showSlides(){
    var i;
    var slides = document.getElementsByClassName("slide");
    for (i=0; i<slides.length; i++){
        slides[i].style.display = "none";
    }

    num++;
    if (num > slides.length){
        num = 1;
    }
    slides[num - 1].style.display = 'block';

    setTimeout(showSlides, 5000);
}