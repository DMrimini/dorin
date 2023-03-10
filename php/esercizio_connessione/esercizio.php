<?php
include("include/con_db.php");
?>

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
    $cittas = fz_connessione();
    foreach ($cittas as $citta) {
        echo $citta['citta'] . "<br>";
    }


    ?>

</body>

</html>