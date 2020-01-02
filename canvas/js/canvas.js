let world, ball, pencil;
let balls =  [];
setup();
draw();
window.addEventListener('resize',setup());


function setup()
{
    world = document.querySelector('canvas');
    world.width = window.innerWidth;
    world.height = window.innerHeight;


    pencil = world.getContext('2d');
    // ball = new Ball(100,100,50,pencil);
    for(i = 0; i < 1; i++)
    {
        let x = Math.floor(Math.random()* 100);
        let y = Math.floor(Math.random()* 100);
        let r = Math.floor(Math.random()* 50);
        balls.push(new Ball(x,y,r,pencil));
    }
   
}

function draw()
{
    requestAnimationFrame(draw);
    pencil.clearRect(0,0,world.width,world.height);
    for(ball of balls){
        ball.update();
        ball.show();
    }
}

function Ball(x,y,r,p)
{
    this.x = x;
    this.y = y;
    this.r = r;
    this.p = p;
    this.xdriection = 5;
    this.ydirection = 5;
    this.update = function()
    {
        if(this.y + this.r > world.height || this.y - this.r < 0) {this.ydirection *= -1}
        if(this.x + this.r > world.width || this.x - this.r < 0) {this.xdriection *= -1}
        
        this.x += this.xdriection;
        this.y += this.ydirection;
        
    }
    this.show = function()
    {
        p.beginPath();
        p.fillStyle = "red";
        p.lineWidth = 5;

        //   x좌표 y좌표, 반지름, 시작 각, 끝나는 각
        p.arc(this.x,this.y,this.r,0,Math.PI*2);
        p.fill();

        p.closePath();
    }
}


