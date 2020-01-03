//Create horizontal progress scroll bar----------
window.onscroll = function() {progressBar()};
function progressBar() {
var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
var scrolled = (winScroll / height) * 100;
document.getElementById("bar").style.width = scrolled + "%";
}


//Returns user to previous page (homepage)-------
function goBack() {
  window.history.back();
}