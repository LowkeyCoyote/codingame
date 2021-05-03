
const surfaceN = parseInt(readline());
for (let i = 0; i < surfaceN; i++) {
    var inputs = readline().split(' ');
}


while (true) {

    var inputs = readline().split(' ');

    const vSpeed = parseInt(inputs[3]);
    let power = parseInt(inputs[6]);

    if(vSpeed <= -40)
    {
        power = 4;
    }

    console.log('0 ' + power);
}
