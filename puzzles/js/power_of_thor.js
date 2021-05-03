
let inputs = readline().split(' ');
const lightX = parseInt(inputs[0]);
const lightY = parseInt(inputs[1]);
const initialTx = parseInt(inputs[2]);
const initialTy = parseInt(inputs[3]);
let thorPositionX = initialTx
let thorPositionY = initialTy


// game loop
while (true) {
    const remainingTurns = parseInt(readline());

    let directionY = ""
    let directionX = ""

    if(thorPositionX > lightX){
        directionX = "W"
        thorPositionX--
    }
    else if(thorPositionX < lightX){
        directionX = "E"
        thorPositionX++
    }

    if(thorPositionY > lightY){
        directionY = "N"
        thorPositionY--
    }
    else if(thorPositionY < lightY){
        directionY = "S"
        thorPositionY++
    }

    console.log(directionY + directionX);
}




