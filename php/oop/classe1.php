<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° classe</title>
</head>

<body>
    <?php
    //definizione di classe
    class Studente
    {
        public $nome = "";
        public $cognome = "";
        public $ruolo = "";
        public $dataNascita;

        function __construct($nomeDaAssegnare, $cognomeDaAssegnare)
        {
            $this->nome = $nomeDaAssegnare;
            $this->cognome = $cognomeDaAssegnare;
            echo "istanziato un nuovo oggetto " . $this->nome . " " . $this->cognome . "<br>";
        }

    //metodo eta che restituisce l'età dello studente
    //metodo setVoti che inizializza l'array dei voti
    }

    $s1 = new Studente("Mario", "Rossi");
    $s1->nome = "Giorgio";
    echo "il nome di s1 è: " . $s1->nome;
    echo "<br>";

    $s2 = new Studente("Bruno", "Bianchi");





    ?>

</body>

</html>