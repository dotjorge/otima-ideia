window.onscroll = function() {scrollFunction()};
var header = document.getElementById("header");

function scrollFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    console.log('1')
    header.classList.add("header-reduced")
  } else {
    console.log('2')
    header.classList.remove("header-reduced")
  }
}