<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operazioni </title>
</head>

<body>
   <?php
   $a = 11;
   $b = 2;
   $c = $a + $b;
   //echo '$c=' . $c;
   echo "<br>";
   echo '$a + $b = $c';
   echo "<br>";
   echo "$a + $b=$c";
   echo "<br>"; 
   echo $a + $b;
   echo "<br>";
   echo "$a * $b = " . ($a * $b);
   echo "<br>";
   $s = "stringa";
   echo $s . $a;
   echo "<br>";
   //modulo % resto intero della divisione
   //5 % 2 vale 1 
   //il risultato intero è 2 e il resto è 1
   echo "<br>";
   //echo $a = $b;
   // operatore ternario
   echo "<br>"; 
    echo "a = $a e b = $b ";
   $risultato = ($a>=$b ? ($a == $b ? "a uguale a b" : "a maggiore di b") : "b maggiore di a");
    echo $risultato;
   echo "<hr>";
    //1. calcolare la media tra $a e $b
    $a = 2;
    $b = 5;
    $media = ($a + $b) / 2;
    echo "la media tra $a e $b è" . $media;
    echo "<br>";
    //2 Invertire il contenuto di $a e $b
    echo "prima a = $a e b = $b <br>";
    //$t = $a;
    //$a = $b;
    //$b = $t;
    echo "dopo a = $a e b = $b <br>";

    echo "<hr>";
    //operatore ++ e --
    echo "prima a = $a <br>";
    $a++; // $a = $ +1; prima restituisce il risultato a e poi lo incrementa
    echo "dopo a = $a";
    // ++$a 

   echo "<br>";
    //operatori logici
    $x = 100;
   $compreso = ($x >= $a) && ($x <= $b);
   echo $compreso ? "x compreso" : "x non compreso";    

    

   ?>
</body>

</html>