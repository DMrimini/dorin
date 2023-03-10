
function somma(){
    let tot = 0;
    let valore;
    console.dir(arguments);
    for (valore of arguments){
        if (typeof valore == "string"){
            tot = tot + parseInt(valore);
        }else{
            tot = tot + valore;
        }  
    }
    return tot;
}

let risultato = somma(1,3,4, "54");

console.log(risultato);

function stampaAConsoleIPrimiDieciNumeri(){
    for (let i = 1; i<= 10; i++){
        console.log(i);
    }
}

stampaAConsoleIPrimiDieciNumeri();

// function isNumeroPariODispari(x = 2){
//     let y = x % 2;
//     if (y === 0){
//         console.log ("il numero e' pari");
//     }else{
//         console.log("e' un numero dispari");
//     }
// }

// isNumeroPariODispari();

function isNumeroPariODispari(x){
    if (x === null || x === undefined || typeof x !== "number"){
        return false;
    }
    if ( x % 2 === 0){
       return true;
    }else{
        return false;
    }
}

// let risultatoN = isNumeroPariODispari(1);
// console.log(risultatoN);

function seNumeroPariStampaCiao(){
    let x = prompt();
    if (isNumeroPariODispari(x)){
        console.log("Ciao");
    }
}

seNumeroPariStampaCiao();