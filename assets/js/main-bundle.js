//declaring a variable that will be used to 
//select html elements

const selectElement = (selector) =>{
    const element = document.querySelector(selector)
    if(element) return element;
    else{
        throw new Error(`TypeError: make sure ${selector} exists or its typed
        correctly.`);
    };
}

const scrollHeader = () =>{
    const headerElem = selectElement('#header');
    if(this.scrollY >= 15){
        headerElem.classList.add('activated');
    }else{
        headerElem.classList.remove('activated');
    }
};

window.addEventListener('scroll',scrollHeader);

//menu items
var toggleIcon = selectElement('#menu-toggle-icon');

var toggleMenu = ()=>{
    let mobileMenu = selectElement('#menu');
    mobileMenu.classList.toggle('activated');
    toggleIcon.classList.toggle('activated')
};

toggleIcon.addEventListener('click',toggleMenu);


//testimonial swiper
new Swiper('.testimonial-slider', {
    slidesPerView: 1,
    spaceBetween: 200,
    speed: 400,
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true
    },
    
  });


//swiper
const swiper = new Swiper('.swiper',{
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
    breakpoints: {
        700: {
            slidesPerView: 2
        },
        1200: {
            slidesPerView: 3
        },
    }
});


//Login Script
function loginUser(){
    var user = $('#username');
    var pass = $('#pass');

    if (isNotEmpty(user) && isNotEmpty(pass)){
       
        //validate the user and submit an ajax request 
       //to the database through auth.php
       
       $.ajax({
            type: 'POST',
            url: '../controller/auth.php',
            data:{
                username: user.val(),
                pass: pass.val()
                 },
            success: function(response){
                $('#login-form')[0].reset();
                if(response.includes('successful')){
                notify('green',response);
                }else if(response.includes('invalid')){
                    notify('red',response);
                }
                
            }
        });
    }
}
// function notify(col,alert){
//     $(".notification").html(alert);
//     $(".notification").css('color', col);
// }
function isNotEmpty(field){
    if (field.val() == ''){
        notify('red','Username/Password incorrect');
        return false;
    }else{
        field.css('border','');
        return true;
    }
}


//signup script
function signUpUser(){
    var email = $('#email');
    var user = $('#username');
    var pass_0 = $('#pass');
    var pass_1 = $('#confirm');


    if (isNotEmpty(user) && isNotEmpty(pass_0) && isNotEmpty(pass_1)){
       if(pass_0.val() == pass_1.val()){
            $.ajax({
                type: 'POST',
                url: '../controller/checkuser.php',
                data:{
                    username: user.val(),
                    pass: pass_1.val(),
                    email: email.val()
                    },
                success: function(response){
                    if(response.includes('created')){
                    notify('green',response);
                    }else if(response.includes('exists')){
                        notify('red',response);
                    }
                    $('#form-id')[0].reset();
                }
            });
       }else{
        notify('red','Passwords do not match');
        return false;
       }
    }
}
function notify(col,alert){
    $(".notification").html(alert);
    $(".notification").css('color', col);
}
function isNotEmpty(field){
    
    //javascript validation for input fields

    if (field.val() == ''){
        notify('red','There can be no empty fields');
        return false;
    }else{
        field.css('border','');
        return true;
    }
}