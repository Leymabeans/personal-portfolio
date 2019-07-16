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
  document.getElementById("message1_1").style.display = "none";
  document.getElementById('button1_1').style.display = "none";

  document.getElementById('message1_2').style.display = "block";
  document.getElementById('button1_2').style.display = "block";
}

function change2() {
  document.getElementById("message1_2").style.display = "none";
  document.getElementById("button1_2").style.display = "none";

  document.getElementById('message1_3').style.display = "block";
  document.getElementById('button1_3').style.display = "block";
}
