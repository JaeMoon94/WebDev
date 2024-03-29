const cvs = document.getElementById("canvas");
const ctx = cvs.getContext("2d");

// create the unit

const box = 32;

//load images

const foodImg = new Image();
foodImg.src = "apple.png";

//Create the Snake

let snake = [];
snake[0] = {
    x : 9 * box,
    y : 10 * box
}

let food = 
{
    x: Math.floor(Math.random()*17 + 1) * box,
    y: Math.floor(Math.random()*15 + 3) * box
}

let score = 0;

//control the snake

let d;

document.addEventListener("keydown",direction);

function direction(event)
{
    if(event.keyCode == 65 && d != "RIGHT"){
        d = "LEFT";
    }
    else if(event.keyCode == 87 && d != "DOWN"){
        d = "UP";
    }
    else if(event.keyCode == 68 && d != "LEFT"){
        d = "RIGHT";
    }
    else if(event.keyCode == 83 && d != "UP"){
        d = "DOWN";
    }
}

//check Collision

function collision(head,array)
{
    for(let i = 0; i < array.length; i++)
    {
        if(head.x == array[i].x && head.y == array[i].y)
        {
            return true;
        }
    }
    return false;
}


// Draw everytihg on canvas

function draw()
{
    ctx.clearRect(0,0,cvs.width,cvs.height);

    for(let i = 0; i < snake.length; i++)
    {
        ctx.fillStyle = (i == 0) ? "green" : "white";
        ctx.fillRect(snake[i].x,snake[i].y,box,box);

        ctx.strokeStyle = "red";
        ctx.strokeRect(snake[i].x,snake[i].y,box,box);
    }
    ctx.drawImage(foodImg,food.x,food.y);
    // old head position
    let snakeX = snake[0].x;
    let snakeY = snake[0].y;

 

    if(d == "LEFT") snakeX -=box;
    if(d == "UP") snakeY -=box;
    if(d == "RIGHT") snakeX +=box;
    if(d == "DOWN") snakeY +=box;
    
    if(snakeX == food.x && snakeY == food.y)
    {

        food = 
        {
            x: Math.floor(Math.random()*17 + 1) * box,
            y: Math.floor(Math.random()*15 + 3) * box
        }
    }
    else{
        snake.pop();
    }

    let newHead = 
    {
        x : snakeX,
        y : snakeY
    }
    //Game Over

    if(snakeX < 0 || snakeX > 18 * box || snakeY < 0 || snakeY > 18 * box || collision(newHead,snake))
    {
        document.getElementById("replay").className = "show"
        document.getElementById("gameOver").className = "GameOver";
        clearInterval(game);
    }
    snake.unshift(newHead);
}

// call draw fubnction every 100 ms

let game = setInterval(draw,100);