require('./bootstrap');

// navbar color changing
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $(".black").css("background" , "rgba(37, 132, 215, 0.31)");
        }
  
        else{
            $(".black").css("background" , "rgb(251, 252, 253, 0.45)");  	
        }
    })
  })