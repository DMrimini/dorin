<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2</title>
</head>
<body>
    <?php
        $inizio = 0;
        $bc1 = "#ccc";
        $bc2 = "#fff";
        $ripetizioni = 5;
        $numeri_predecessori = 1;
        $numeri_successivi = 1;
        $ultimo_numero = 10;
        $data_corrente = date("d");
        $multiplo_10 = 0;

        for ($i = $inizio; $i <= 30; $i++){
            if ($i % 2){
                $bc = $bc2;
            }
            else {
                $bc = $bc1;
            }
            if ($i == $data_corrente){
                echo $i - $numeri_predecessori . " " . "<span style='color:#f00'>" . "<b>" . $i . "</b>" . "</span>" . " " . $i + $numeri_successivi;
            } else {
                echo $i - $numeri_predecessori . " " . "<span style='color:#f00'>" . $i . "</span>" . " " . $i + $numeri_successivi; 
            }
            if ($i % 10 == 0){
                $multiplo_10++;
            }

            echo "<div style='background-color:$bc'>";
            echo "<br>";
        }
        echo "</div>";
        echo "<hr>";
        echo '$inizio= ' . "'$inizio'" . " " . '$ripetizioni= ' . "$ripetizioni <br>";
        echo 'l\'ultimo numero scritto (tra quelli considerati): ' . "ultimo numero considerato: ". "'$ultimo_numero'";
        echo "<br>";
        echo "un multiplo di dieci è stato scritto: $multiplo_10 volte";
        
        $anno_corrente = date ("y");
        
        
    
    ?>  


</body>
</html>

</html>