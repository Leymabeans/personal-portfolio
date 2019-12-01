//Variables------------------
var canvas = document.getElementById('header');
var c = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
maxRadius = 40;
minRadius = 2;
var circleArray = [];
var colorArray = [
  '#FFFFFF',
  '#03F7EE', 
  '#00B295', 
  '#191516', 
  '#AB2346'
];
var mouse = {
  x: undefined, y:undefined
}


//Establish circle-----------
function Circle(x, y, dx, dy, radius) {
  this.x = x;
  this.y = y;
  this.dx = dx;
  this.dy = dy;
  this.radius = radius;
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
    if(this.x + this.radius > innerWidth || this.x - this.radius < 0) {
      this.dx = -this.dx;
    }
    if(this.y + this.radius > innerHeight || this.y - this.radius < 0) {
      this.dy = -this.dy;
    }
    this.x += this.dx;
    this.y += this.dy;

    if (mouse.x - this.x < 50 && mouse.x - this.x > -50 && mouse.y - this.y < 50 && mouse.y - this.y > -50) {
      if (this.radius < maxRadius) {
        this.radius += 1;
      }
    }
    else if (this.radius > minRadius) {
      this.radius -= 1;
    }

    this.draw();
  }
}


//Create 600 circles---------
for(var i=0; i < 600; i++) {
  var x = Math.random() * (innerWidth - radius * 2) + radius;
  var y = Math.random() * (innerHeight - radius * 2) + radius;
  var dx = (Math.random() - 0.5) * 2;
  var dy = (Math.random() - 0.5) * 2;
  var radius = Math.random() * 3 + 1;
  var color = 'rgba(255, 0, 0, 0.9)';
  circleArray.push(new Circle(x, y, dx, dy, radius));
}


//Animate circles------------------
function animate() {
  requestAnimationFrame(animate);
  c.clearRect(0, 0, innerWidth, innerHeight);

  for(var i=0; i<circleArray.length; i++){
    circleArray[i].update();
  }
}
animate();


//Mouse Over-----------------
window.addEventListener('mousemove', function(event) {
  mouse.x = event.x;
  mouse.y = event.y;
  console.log(mouse.x);
});