$(document).ready(function(){
    $(".SlickCarousel").slick({
        rtl:false, // If RTL Make it true & .slick-slide{float:right;}
        autoplay:true, 
        autoplaySpeed:5000, //  Slide Delay
        speed:800, // Transition Speed
        slidesToShow:4, // Number Of Carousel
        slidesToScroll:1, // Slide To Move 
        pauseOnHover:false,
        appendArrows:$(".Container .Head .Arrows"), // Class For Arrows Buttons
        prevArrow:'<span class="Slick-Prev"></span>',
        nextArrow:'<span class="Slick-Next"></span>',
        easing:"linear",
        responsive:[
          {breakpoint:801,settings:{
            slidesToShow:3,
          }},
          {breakpoint:641,settings:{
            slidesToShow:3,
          }},
          {breakpoint:481,settings:{
            slidesToShow:1,
          }},
        ],
      })
});


// index page

filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

// Show filtered elements
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementsByClassName("filter-class");
var btns = btnContainer.getElementsByClassName("port-nav");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

// end of index js
