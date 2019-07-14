
$(window).bind('scroll', function () {
  if ($(window).scrollTop() > 1000) {
      $('header').addClass('fixed');
  } else {
      $('header').removeClass('fixed');
  }
});


$(document).ready(function(){ 


  
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

$(document).ready(function () {
    $('.jump-sect3').click(function() {
    $('html, body').animate({
      scrollTop: $("#section03").offset().top
    }, 1000)
  })
  });