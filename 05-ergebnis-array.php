<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ergebnis</title>
    <style>
        table {
            font-family: sans-serif;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid gray;
            padding: 5px;
        }
    </style>

</head>
<body>
    <?php 

        // Werte aus uebung-array.php auslesen:
        echo '<h2>Werte des Arrays ausgeben</h2>';
        echo '<pre>', print_r($_POST), '</pre>';
        //oder
        $werte = array_values($_POST);

        // Werte aufsteigend sortieren
        echo '<h2>Werte aufsteigend sortieren</h2>';
        $werte_aufsteigend = $werte;
        sort($werte_aufsteigend);
        
        foreach($werte_aufsteigend as $wert) {
            echo "$wert ";
        }

        // Summe des Arrays berechnen
        echo '<h2>Summe des Arrays-Werte berechnen</h2>';
        $summe = array_sum($werte);

        // gerade Zahlen ausgeben
        $gerade = '';

        foreach($werte_aufsteigend as $wert) {
            if(($wert % 2) == 0) $gerade .= "$wert ";
        }

        // Checkpoint
        echo '<h2>Checkpoint</h2>';
        echo '<pre>', var_dump($werte_aufsteigend), '</pre>';
    ?>

    <table>
        <tr>
            <th>Programmteil</th>
            <th>Ergebnis</th>
        </tr>

            <tr>
                <td>Sortierte Zahlen</td>
                <td>
                    <?php 
                        foreach($werte_aufsteigend as $wert) {
                            echo "$wert ";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Summe</td>
                <td><?php echo $summe; ?></td>
            </tr>
            <tr>
                <td>Gerade Zahlen</td>
                <td><?php echo $gerade; ?></td>
            </tr>

    </table>


    


</body>
</html>
