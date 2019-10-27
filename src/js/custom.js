
$(window).bind('scroll', function () {
  if ($(window).scrollTop() > 1000) {
      $('header').addClass('fixed');
      $('.wrapper-social').removeClass('d-none');
      
  } else {
      $('header').removeClass('fixed');
      $('.wrapper-social').addClass('d-none');
  }
});





var str = $('.dynamic-text');



str.hide().contents().each(function() {
    var words;
    if (this.nodeType == 3) {
        words = '<span> ' + this.data.split(/\s+/).join(' </span><span> ') + ' </span>';
        $(this).replaceWith(words);
    } else if (this.nodeType === 1) {
        this.innerHTML = '<span> ' + this.innerHTML.split(/\s+/).join(' </span><span> ') + ' </span>';
    }
});

   // Remove any empty spans that were added
str.find('span').hide().each(function() {
    if( !$.trim(this.innerHTML) ) {
        $(this).remove();
    }
});

str.show().find('span').each(function(i) {
    $(this).delay(400 * i).fadeIn(900);
});


//     $('.jump-sect3').click(function() {
//     $('html, body').animate({
//       scrollTop: $("#section03").offset().top
//     }, 1000)
//   });
  

  $(".js-trigger").click(function () {
    
        $(this).text("Jqueryyyyy is workinggggg yeayyyyyyyyyyyyyyyyyy");
    
});


// $(".navbar-toggle").click(function () {
    
// if($(this).hasClass("collapsed")){
//     alert("yesssss");
// }else{
//     alert("something is not right");
// }

// });

var slideIndex = 0;
showSlides();


function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var service = document.getElementsByClassName("service");
 
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < service.length; i++) {
    service[i].className = service[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";  
  service[slideIndex-1].className += " active";
 
   // Change image every 2 seconds
  setTimeout(showSlides, 5000);
}

// $('#myCarousel').carousel({
//   interval: 4000
// })

// $('.carousel .item').each(function(){
//   var next = $(this).next();
//   if (!next.length) {
//     next = $(this).siblings(':first');
//   }
//   next.children(':first-child').clone().appendTo($(this));
  
//   for (var i=0;i<2;i++) {
//     next=next.next();
//     if (!next.length) {
//     	next = $(this).siblings(':first');
//   	}
    
//     next.children(':first-child').clone().appendTo($(this));
//   }
// });

var nextButton = $("#right-btn");
var backButton = $("#left-btn");
var con = $("#cont");
var sliderCont = $("#slider-container");

var sldElm = $(".card .card-img-top");
var i = 0;
while (i<sldElm.length) {
  sldElm[i].setAttribute("draggable", false);
  i++
}

var mL = 0, maxX = 200, diff = 0 ;

function slide() {
   mL-=20;
  if( mL < -maxX ){ mL = 0 ;}
  sliderCont.animate({"margin-left" : mL + "%"}, 500);
}

function slideBack() {
  mL += 20;
  if ( mL > 0 ) { mL = -200 ; }
  sliderCont.animate({"margin-left" : mL + "%"}, 500);
}

nextButton.click(slide);
backButton.click(slideBack);

$(document).on("mousedown touchstart", con, function(e) {
  
  var startX = e.pageX || e.originalEvent.touches[0].pageX;
  diff = 0;

  $(document).on("mousemove touchmove", function(e) {
    
      var xt = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (xt - startX) * 100 / window.innerWidth;
    if( mL == 0 && diff > 10 ) { 
      event.preventDefault() ;
    } else if (  mL == -maxX && diff < -10 ) {
       event.preventDefault();   
    } else {
      sliderCont.css("margin-left", mL + diff + "%");
    }
  });
});

$(document).on("mouseup touchend", function(e) {
  $(document).off("mousemove touchmove");
  if(  mL == 0 && diff > 4 ) { 
      sliderCont.animate({"margin-left" :  0 + "%"},100);
   } else if (  mL == -maxX  && diff < 4 ){
       sliderCont.animate({"margin-left" : -maxX  + "%"},100);  
   } else {
      if (diff < -10) {
        slide();
      } else if (diff > 10) {
        slideBack();
      } else {
        sliderCont.animate({"margin-left" :  mL + "%"},300);
      }
  }
});


$('video').parent().click(function () {
  if($(this).children("video").get(0).paused){       
    $(this).children("video").get(0).play();  
    $(this).children(".playpause").fadeOut();
    }else{      
      $(this).children("video").get(0).pause();
    $(this).children(".playpause").fadeIn();
    }
});

var formContainer = $('#form-container');

bindFormClick();
//Opening the form
function bindFormClick(){
  $(formContainer).on('click', function(e) {
    e.preventDefault();
    toggleForm();
    //Ensure container doesn't togleForm when open
    $(this).off();
  });
}

//Closing the form
$('#form-close, .form-overlay').click(function(e) {
  e.stopPropagation();
  e.preventDefault();
  toggleForm();
  bindFormClick();
});

function toggleForm(){
  $(formContainer).toggleClass('expand');
  $(formContainer).children().toggleClass('expand');
  $('body').toggleClass('show-form-overlay');
  $('.form-submitted').removeClass('form-submitted');
}

//Form validation
$('form').submit(function() {
  var form = $(this);
  form.find('.form-error').removeClass('form-error');
  var formError = false;
  
  form.find('.input').each(function() {
    if ($(this).val() == '') {
      $(this).addClass('form-error');
      $(this).select();
      formError = true;
      return false;
    }
    else if ($(this).hasClass('email') && !isValidEmail($(this).val())) {
      $(this).addClass('form-error');
      $(this).select();
      formError = true;
      return false;
    }
  });
  
  if (!formError) {
    $('body').addClass('form-submitted');
    $('#form-head').addClass('form-submitted'); 
    setTimeout(function(){
      $(form).trigger("reset");
    }, 1000);
  }
  return false;
});

function isValidEmail(email) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(email);
};