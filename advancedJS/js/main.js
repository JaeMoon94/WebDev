window.addEventListener('mousedown',display);
function display()
{
    
}

let output = "";
let div = document.getElementById("display");
let open = "<table><tr><th>Band</th><th>Vocals</th></tr>";
let guts = '';
let close = "</table";
for(b of bands)
{
    guts += "<tr><td> " + b.name + "</td><td> " + b.vocal + " </td></tr>";
}

div.innerHTML = output + guts + close;