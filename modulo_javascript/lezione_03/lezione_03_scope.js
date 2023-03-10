// let totale = 2;
// function incrementa(){
//     let x = totale + 1;
// }

// incrementa();
// console.log("Il valore di totale e' : " + totale);

// incrementa();
// console.log("Il valore di totale e' : " + totale);



let totale = 2;
function incrementa(tot){
    //let totale = 0;
    tot += 1;
    // console.log("Il valore di totale e' : " + totale);
    return tot;
}

// incrementa();
// console.log("Il valore di totale e' : " + totale);

// incrementa();
// console.log("Il valore di totale e' : " + totale);

let nonStampare = true;

function stampa(){
    nonStampare = !nonStampare;
    if (!nonStampare){
        // console.log("Stampo");
    }
}

// stampa();



// Scrivere un blocco di codice Javascript che stampi 
// a console i primi dieci interi pari compresitra 20 e 0, partendo da 20.
for (let i = 20; i >0; i--){
    if(i % 2 == 0){
        // console.log (i);
    }
}

// Scrivere un blocco di codice Javascript che
// stampi a console i primi dieci numeri interi,
// escluso lo zero, in lingua italiana.

// let numero = 1;
for (let i = 1; i <=10; i++){
switch(i){
    case 1:{
        console.log("numero uno");
        break;
    }
    case 2:{
        console.log("numero due");
        break;
    }
    case 3:{
        console.log("numero tre");
        break;
    }
    case 4:{
        console.log("numero quattro");
        break;
    }
    case 5:{
        console.log("numero cinque");
        break;
    }
    case 6:{
        console.log("numero sei");
        break;
    }
    case 7:{
        console.log("numero sette");
        break;
    }
    case 8:{
        console.log("numero otto");
        break;
    }
    case 9:{
        console.log("numero nove");
        break;
    }
    case 10:{
        console.log("numero dieci");
        break;
    }
}

}



// Scrivere un blocco di codice Javascript che dato
// un numero stampi la tabellina corrispondente.

let numero = 5; // numero di cui vogliamo la tabellina
for (let i = 1; i <= 10; i++) {
  let risultato = numero * i;
  console.log(numero + " x " + i + " = " + risultato);
}

// Scrivi un blocco di codice che dato un array di
// numeri, calcoli la media dei valori e restituisca in
// output la media e tutti i valori minori della media.

var numeri = [10, 8, 6, 12, 9]; // array di numeri
var somma = 0;
for (var i = 0; i < numeri.length; i++) {
  somma += numeri[i];
}
var media = somma / numeri.length;
console.log("La media è: " + media);
console.log("Valori inferiori alla media:");
for (var i = 0; i < numeri.length; i++) {
  if (numeri[i] < media) {
    console.log(numeri[i]);
  }
}

