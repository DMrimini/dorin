function makeAutomobile (nomeModello, nomeMarca){
    return {
        nomeModello,
        nomeMarca
    }
}

let garage = {
    automobili: []
}

garage.inserisciAuto = function(auto){
    this.automobili
}

garage.rimuoviAuto = function(auto){
    delete this.automobili[auto];
}

garage.stampaAuto = function(nomeMarca){
    for (const auto of this.automobili){
        if (nomeMarca === auto.nomeMarca){
            console.log(auto.nomeMarca + " " + auto.nomeModello);
        }
    }
}