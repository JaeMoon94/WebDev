let world, brush;

window.addEventListener('resize',setup);
window.addEventListener('mousemove',getCoords);
let mouse = {x : undefined, y : undefined}
world = document.querySelector('canvas');
setup();
draw();

function getCoords(evnent)
{
    mouse.x = event.x;
    mouse.y= event.y;
}

function setup()
{
    world.width = window.innerWidth;
    world.height = window.innerHeight;
    brush = world.getContext('2d');
    brush.beginPath();
        brush.strokeStyle = "red";
        brush.linewidth = 10;
        brush.arc(100,100,50,Math.PI*2, true);
        brush.fill();
        brush.stroke();
    brush.closePath();
    

}

function draw()
{
    requestAnimationFrame(draw);
    brush.clearRect(0,0,world.width,world.height);
    brush.font = " 40px chiller";
    t = new things();
    t.show();
        brush.fillText(("x : " + mouse.x + " y : " + mouse.y),mouse.x,mouse.y);
}

function things()
{
    this.show = function()
    {
        brush.beginPath();
            brush.moveTo(100,100);
            brush.lineTo(200,200);
            brush.lineTo(300,100);
            brush.stroke();
        brush.closePath();

    }
}
