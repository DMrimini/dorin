<?php

// function fatturato_totale($b)
// {

//     $totale = 0; //cosi non mi da qualcosa in più
//     foreach ($b as $a) {
//     
//     }
//     return $totale;
// }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $categoria1 = ['nome' => "calzature", 'n_prodotti' => "20", 'fatturato' => 1200];
    $categoria2 = ['nome' => "camicie", 'n_prodotti' => "12", 'fatturato' => 800];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => "5", 'fatturato' => 650];

    $categorie = [$categoria1, $categoria2, $categoria3];

    // elencare i nomi delle categorie
    foreach ($categorie as $nomi) {
        echo $nomi['nome'];
        echo "<br>";
    }
    echo "<hr>";

    // calcolare il numero totale di prodotti
    $somma = 0;
    foreach ($categorie as $categoria) {
        $somma += $categoria['n_prodotti'];
    }
    echo "il numero totale dei prodotti è: " . $somma;
    echo "<hr>";

    // elencare qual è la categoria con il fatturato più alto
    $max_fatturato = 0;
    foreach ($categorie as $k)
        if ($k['fatturato'] > $max_fatturato) {
            $max_fatturato = $k['fatturato'];
        }
    echo "il fatturato massimo è" . $max_fatturato . "<br>";
    echo "<hr>";

    // aggiungere in fordo ad ongi array di $categorie un ulteriore elemento con chiave anno e valore anno corrente
    foreach ($categorie as $i => $c) {
        $categorie['$i'] = ("Y");
    }
    // echo $categorie[$i];

    // punto 4
    // $tot = fatturato_totale($b);
    // echo $tot;


    ?>
</body>

</html>