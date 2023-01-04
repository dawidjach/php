<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung: Berechnungen mithilfe von Funktionen</title>
</head>
<body>
        <h1>Übung: Berechnungen mithilfe von Funktionen</h1>


    <?php 

    function addiere($zahl1, $zahl2, $zahl3) {
        $ergebnis = $zahl1 + $zahl2 + $zahl3;
        return "<p>Addition (Zahlen: $zahl1 , $zahl2 , $zahl3): $ergebnis</p>";
    }
    
    
    function multiplikation($zahl1, $zahl2, $zahl3) {
            $ergebnis = $zahl1 * $zahl2 * $zahl3;
            return "<p>Multiplikation (Zahlen: $zahl1 , $zahl2 , $zahl3): $ergebnis</p>";
    }
    
    
    echo addiere(8, 4, 2);
    echo multiplikation(8, 4, 2); 
    echo addiere(8, 4, 0);
    echo multiplikation(8, 4, 1);
    
    


    ?>
    


</body>
</html>
