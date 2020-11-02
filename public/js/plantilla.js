var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("barra").style.top = "0";
  } else {
    document.getElementById("barra").style.top = "-100%";
  }
  prevScrollpos = currentScrollPos;
}