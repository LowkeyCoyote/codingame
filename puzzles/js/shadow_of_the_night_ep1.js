

var inputs = readline().split(' ');
const W = parseInt(inputs[0]);
const H = parseInt(inputs[1]);
const N = parseInt(readline());
var inputs = readline().split(' ');
let X0 = parseInt(inputs[0]);
let Y0 = parseInt(inputs[1]);


let x1 = 0;
let x2 = W - 1;

let y1 = 0;
let y2 = H - 1;

while (true) {

    const bombDir = readline();

    if(bombDir.includes('R'))
    {
        x1 = X0 + 1;
    }
    else if(bombDir.includes('L'))
    {
        x2 = X0 - 1;
    }

    if(bombDir.includes('D'))
    {
        y1 = Y0 + 1;
    }
    else if(bombDir.includes('U'))
    {
        y2 = Y0 - 1;
    }

    X0 = Math.ceil((x2 + x1)/2);
    Y0 = Math.ceil((y2 + y1)/2);

    console.log(X0, Y0);
}
