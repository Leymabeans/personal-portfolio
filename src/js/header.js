//Variables-----------
var canvas = document.querySelector('canvas');
var c = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
var maxRadius = 40;
var circleArray = [];
var colorArray = [
  '#03F7EE', 
  '#00B295', 
  '#AB2346'
];
var mouse = {
  x: undefined, y:undefined
}



//Establish circle structure---------------------
function Circle(x, y, dx, dy, radius) {
  //Circle variables
  this.x = x;
  this.y = y;
  this.dx = dx;
  this.dy = dy;
  this.radius = radius;
  this.minRadius = radius;
  this.color = colorArray[Math.floor(Math.random() * colorArray.length)];

  //Draw circles
  this.draw = function() {
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    c.fillStyle = this.color;
    c.fill();
  }

  //Check parameters
  this.update = function() {
    //Contain circles in the screen
    if(this.x + this.radius > innerWidth || this.x - this.radius < 0) {
      this.dx = -this.dx;
    }
    if(this.y + this.radius > innerHeight || this.y - this.radius < 0) {
      this.dy = -this.dy;
    }
    this.x += this.dx;
    this.y += this.dy;

    //Grow circles if mouse is close
    if (mouse.x - this.x < 50 && mouse.x - this.x > -50 && mouse.y - this.y < 50 && mouse.y - this.y > -50) {
      if (this.radius < maxRadius) {
        this.radius += 1;
      }
    }

    //Shrink to original size if no mouse
    else if (this.radius > this.minRadius) {
      this.radius -= 1;
    }

    this.draw();
  }
}



//Create circles, new ones on page resize--------
function init() {
  circleArray = [];
  for(var i=0; i < 150; i++) {
  var x = Math.random() * (innerWidth - radius * 2) + radius;
  var y = Math.random() * (innerHeight - radius * 2) + radius;
  var dx = (Math.random() - 0.5) * 1.3;
  var dy = (Math.random() - 0.5) * 1.3;
  var radius = Math.random() * 13 + 6;
  var color = 'rgba(255, 0, 0, 0.9)';
  circleArray.push(new Circle(x, y, dx, dy, radius));
  }
}



//Animate circles, add all circles to array------
function animate() {
  requestAnimationFrame(animate);
  c.clearRect(0, 0, innerWidth, innerHeight);

  for(var i=0; i<circleArray.length; i++){
    circleArray[i].update();
  }
}



//Grow circles everytime mouse moves-------------
window.addEventListener('mousemove', function(event) {
  mouse.x = event.x;
  mouse.y = event.y;
});

//Change canvas width when on page resize--------
window.addEventListener('resize', function() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  init();
});



//Functions to create circles and animate--------
init();
animate();