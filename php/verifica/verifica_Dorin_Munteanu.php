<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica PHP</title>
</head>

<body>
    <?php
    //     //Verifica PHP
// Si deve gestire l’elenco dei punteggi ottenuti dai partecipanti ad un bando regionale. Si chiede di
// svolgere le seguenti attività:
// 1. inizializzare il numero di partecipanti al bando assegnando un numero casuale da 10 a 100;
// 8. valorizzare un array con i punteggi di ogni partecipante presente con interi casuali da 0 a
// 10, considerando che il giorno della prova 5 partecipanti erano malati;
// 9. elencare tutti i punteggi presenti nell&#39;array con uno sfondo alternato nelle varie righe,
// scrivendo in grassetto i punteggi sufficienti e in corsivo quelli insufficienti;
// 10. modificare l’elenco del punto precedente utilizzando un elenco non ordinato html;
// 11. in un riquadro, riportare quanti partecipanti hanno ottenuto il punteggio pieno (10 punti) e
// quante volte è stato assegnato il punteggio più basso (tra quelli assegnati realmente);
// 12. calcolare e visualizzare il punteggio medio dei bocciati.
// 13. Questo bando permette di accedere immediatamente a $posti posti di lavoro già disponibili
// se il punteggio ottenuto è maggiore di 8: calcolare e visualizzare quanti sono i partecipanti
// che potrebbero essere immediatamente assunti e di questi la percentuale che rimane in lista
// d&#39;attesa.
    



    echo "<ul>";

    $partecipanti = rand(10, 100);
    $assenti = 5;

    //inizializzo l'array
    $punteggi = [];
    for ($i = 0; $i < ($partecipanti - $assenti); $i++) {
        $punteggi[$i] = rand(0, 10);
    }



    $bg1 = "#fff";
    $bg2 = "#ccc";
    for ($i = 0; $i < count($punteggi); $i++){

        $bg = $bg1;
    if ($i % 2)
        $bg = $bg2;
        
    }
    echo "<li style='background-color:$bg' >";
        if ($punteggi[$i] >= 6){
            echo "<strong> {$punteggi[$i]} </strong>";
        }
        else {
            echo "<i> {$punteggi[$i]} </i>";
        echo "</li>";
    }









    echo "</ul>";
    ?>
   
</body>

</html>