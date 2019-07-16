/*Loader Functionality============================*/
var myVar;
function initial() {
  myVar = setTimeout(showPage, 800);
}   
function showPage() {
  document.getElementById("loader").style.display = "none";
}


/*Greeting=======================================*/
function change1() {
  document.getElementById('opening').src = "./images/giddy_opening2.jpg";

  document.getElementById('button1_1').style.display = "none";
  document.getElementById('button1_2').style.display = "block";
}

function change2() {
  document.getElementById('opening').src = "./images/giddy_opening3.jpg";

  document.getElementById("button1_2").style.display = "none";
  document.getElementById('button1_3').style.display = "block";
}

function disappear() {
  document.getElementById('greeting').style.display = "none";
}
