<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übungsaufgaben</title>
</head>
<body>
    <h1>Übung 1</h1>

    <?php 
        echo '<h3>Aufgabe 1</h3>';
        $zahl1 = 78.123456789;
        printf('0%3.5f', $zahl1);


        echo '<h3>Aufgabe 2</h3>';
        $string1 = "Beachten Sie das Angebot für die ";
        $string2 = "folgende Kalenderwoche: ";
        $string3 = " ";
        $string4 = "Bananen, 5 Kilo für nur 5.- Euro!"; 
        printf ("<p>%s-%s-%'*6s-%s</p>", $string1, $string2, $string3, $string4);

        echo '<h3>Aufgabe 3</h3>';
        $allestrings = $string1. $string2. $string3. $string4;
        $erg = explode(" ", $allestrings);

        echo '<pre>';
        print_r($erg);
        echo '</pre>';

        // oder
        echo '<h3><p>oder mit for-Schleife:</p></h3>';
        $trennzeichen = " ";
        $array = explode($trennzeichen, $allestrings);
        for ( $x = 0; $x < count ( $array ); $x++ )
        {
        echo $array[$x]."";
        }
        echo '<p></p>';

        // implode
        echo '<h3>implode-Funktion</h3>';
        $erg1 = implode("#", $erg);
        echo '<pre>';
        print_r($erg1);
        echo '</pre>';

/*         $allestrings1 = array ($string1, $string2, $string3, $string4, $string5);
        echo $allestrings1; */


/* Aufgabe 4 */
        echo '<h3>Aufgabe 4</h3>';
        $allestrings = str_replace('das Angebot', '<b>unser Sonderangebot</b>', $allestrings);
        echo $allestrings;
        $string5 = $allestrings;
        echo '<p><i>String 5 = '.$string5.'</i></p>';

        $allestrings = str_replace('Bananen', '<b>Alle Obstsorten</b>', $allestrings);
        echo "<p>$allestrings</p>";
        $string6 = $allestrings;
        echo '<p><i>String 6 = '.$string5.'</i></p>';
        

    ?>
</body>
</html>
