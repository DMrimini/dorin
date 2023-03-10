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
     //definisco il primo array
		$p1 = ['Primini Primo', 'Secondini Secondo'];
		$p2 = ['Giannini Gianni', 'Stefanini Stefano', 'Mariolini Maria','Giacomini Giacomo'];
		$p3 = ['Violetti Viola','Gaietti Gaia'];
		$partecipanti= [$p1, $p2, $p3];
		$corsi = ['Autocad','Informatica','Inglese'];


        for($i = 0; $i < 3; $i++)
            if($corsi[$i] == ['Informatica']){
                $indice = $i;
        }
		//aggiungo il nuovo partecipante 'Novella Novellini' al corso di Informatica
        $partecipanti[$indice][] = 'Novella Novellini';
    ?>
</body>

</html>