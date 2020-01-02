
let pictures = [];
let imgtag = "";
let w,h;
pictures.push(new PictureMaker(200,300));
let max = 500;
let min = 200;

window.addEventListener("keydown",pushed);
function pushed(event)
{
    if(event.key = "1");
    console.log("Nice");
    console.log(event);
}


//document.getElementById("picture-holder").innerHTML = '<img src ="'+pictures[0].url()+'"></img>';

for(p of pictures)
{
    h = Math.floor(Math.random() * (max - min) + min);
    w = Math.floor(Math.random() * (max - min) + min);
    imgtag += '<img src"'+ p.url() + '">';
}

document.getElementById("picture-holder").innerHTML = imgtag;
function PictureMaker(w,h)
{
    
    this.w = w;
    this.h = h;
    this.url = function()
    {
        return "https://tokyotreat.cdn.prismic.io/tokyotreat/52db815af4855e270d8d1b931ac3443615815f5a_maxresdefault.jpg"
    }
}
