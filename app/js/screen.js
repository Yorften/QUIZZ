let speed = 30;
let scale = 0.17; // Image scale (I work on 1080p monitor)
let canvas;
let ctx;
let logoColor;

let dvd = {
  x: 200,
  y: 300,
  xspeed: 10,
  yspeed: 10,
  img: new Image(),
};

(function main() {
  canvas = document.getElementById("screen");
  ctx = canvas.getContext("2d");
  dvd.img.src = "/quizz/assets/images/aws.png";

  //Draw the screen
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  let oldWidth = canvas.width;
  

  window.addEventListener("resize", (event) => {
    //Update the dimentions of screen
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  });
  update();
})();

function update() {
  setTimeout(() => {
    //Draw the canvas background
    ctx.fillStyle = "#232f3e";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    //Draw DVD Logo and his background
    ctx.fillStyle = "#232f3e";
    ctx.fillRect(dvd.x, dvd.y, dvd.img.width * scale, dvd.img.height * scale);
    ctx.drawImage(
      dvd.img,
      dvd.x,
      dvd.y,
      dvd.img.width * scale,
      dvd.img.height * scale
    );
    //Move the logo
    dvd.x += dvd.xspeed;
    dvd.y += dvd.yspeed;
    //Check for collision
    checkHitBox();
    update();
  }, speed);
}

//Check for border collision
function checkHitBox() {
  if (dvd.x + dvd.img.width * scale >= canvas.width || dvd.x <= 0) {
    dvd.xspeed *= -1;
  }

  if (dvd.y + dvd.img.height * scale >= canvas.height || dvd.y <= 0) {
    dvd.yspeed *= -1;
  }
}
