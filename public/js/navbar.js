// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}


// window.onscroll = function() {myFunction()};

// var navigation = document.getElementById("navigation");
// var sticky = navigation.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navigation.classList.add("sticky")
//   } else {
//     navigation.classList.remove("sticky");
//   }
// }