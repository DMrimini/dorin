<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> IF </title>
</head>

<body>
   <?php
   //assegnare a $m il max tra x e y
   $x = 10;
   $y = 100;
    if( $x >= $y ){
        if($x==$y){
           //echo "x uguale a y <br>";
        }
       //echo "condizione vera!";
        $m = $x;
    } else {
       //echo "condizione falsa";
        $m = $y;
    }
   //echo " <br> il max tra $x e $y è $m";

   //Un supermercato offre una politica di sconto ai propri clienti: 
   //con l’acquisto di 3 prodotti applica il 10% di sconto sull’oggetto meno costoso. 
   //Determinare il totale (imponibile + iva, supponendo l’iva al 22%)
   
   $p1 = 10; //costo prodotto 1;
   $p2 = 9; //costo prodotto 2;
   $p3 = 8; //costo prodotto 3;

   //trovare il minore dei 3 prezzi;
    echo "<hr>";

    

    
   ?>
</body>

</html>