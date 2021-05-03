

while (true) {

    let maxHeight = 0
    let maxIndice = 0

    for (let i = 0; i < 8; i++) {
        const mountainH = parseInt(readline());


        if(mountainH > maxHeight)
        {
            maxHeight = mountainH
            maxIndice = i
        }
    }

    console.log(maxIndice);

}
