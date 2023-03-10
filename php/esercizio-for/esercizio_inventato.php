<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    /*il cliente del centro scommesse 
    sceglie un numero $numero e scommette 
    che è uguale alla media (arrotondata all'intero più piccolo)
    di $estrazioni numeri casuali da 1 a 10
    Verificare se il cliente ha vinto
    */
    $numero = 2;
    $estrazioni = 5;
    $somma = 0;
    for ($i = 0; $i < $estrazioni; $i++) {
        $r = rand(1, 10);
        echo $r . " ";
        //$somma = $somma + $r;
        $somma += $r;

    }
    echo "<br>somma = $somma";
    echo "<br>media = " . $somma / $estrazioni."<br>";

    $media_intera = ($somma - ($somma % $estrazioni)) / $estrazioni;

    if($media_intera == $numero){
        echo "hai vinto";
    }
    else{
        echo "ritenta!";
    }


    ?>

</body>

</html>