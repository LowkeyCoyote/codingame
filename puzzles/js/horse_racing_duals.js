
let tableau = [];

const N = parseInt(readline());
for (let i = 0; i < N; i++) {
    const pi = parseInt(readline());
    tableau[i] = pi;
}


tableau.sort(function(a , b){
    return a - b;}
);


let ecart = Math.abs(tableau[0] - tableau[1]);

for (let i = 1; i < (N - 1); i++)
{
    let diff = Math.abs(tableau[i+1] - tableau[i]);

    if(diff < ecart)
    {
        ecart = diff;
    }

}

console.log(ecart);
