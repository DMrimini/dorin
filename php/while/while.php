<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <?php
    //PER CASA somma dei soli n. pari
    // for ($i = 1; $i <= 10; $i++) {
    //     echo $i;
    // }
    

    // $i = 1;
    // while ($i <= 10) {
    //     echo "$i";
    //     $i++;
    // }
    
    //scrivere i primi interi positivi a partire da $start
    //che sommati raggiungano 
    //il target $target
    //con il for
    $target = 10;
    $somma = 0;
    $start = 3;
    for ($i = $start; ($somma < $target); $i++) {
        echo "$i<br>";
        $somma = $somma + $i;
        // if ($somma >= $target) {
        //     break;
        // }
    }
    echo "somma = " . $somma;

    echo "<hr>";
    //stesso esercizio con il while
    $somma = 0;
    $i = $start - 1;
    echo "inizio la somma da " . ($i + 1);
    while ($somma < $target) {
        $i++;
        //...
        $somma += $i;
    }
    echo " fino a $i <br>";
    echo "<br>somma = $somma";


    ?>
</body>

</html>