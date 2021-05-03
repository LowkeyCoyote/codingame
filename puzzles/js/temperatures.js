

const n = parseInt(readline());
let inputs = readline().split(' ');

let minTemp = 5527

if(n == 0)
{
    minTemp = 0
}

for (let i = 0; i < n; i++) {

    const t = parseInt(inputs[i]);

    let thisTemp = inputs[i]

    if(Math.abs(thisTemp) < Math.abs(minTemp))
    {
        minTemp = thisTemp
    }

    else if(Math.abs(thisTemp) === Math.abs(minTemp))
    {
        minTemp = (minTemp > thisTemp) ? minTemp : thisTemp;
    }

}

console.log(minTemp);
