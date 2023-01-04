<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatierte Ausgaben mit printf()</title>
</head>
<body>
    <h1>Formatierte Ausgaben mit <code>printf()</code></h1>
    
    <?php 
        printf ('<p>Eine normal Ausgabe:</p>');      
        printf ('<p>Ausgabe Typ B (binär): %b</p>',125);    // 1111101
        printf ('<p>Ausgabe Typ C (Zahl als ASCII): %c</p>',125);   //}
        printf ('<p>Ausgabe Typ D (Ganzzahl): %d</p>',125.43);  //125
        printf ('<p>Ausgabe Typ F (float): %f</p>',125.43);  //125.430000
        printf ('<p>Ausgabe Typ S (string): %s</p>',125.43);  //125.43
        printf ('<p>Ausgabe Typ X (Hexadezimal): %x</p>',125.43);  //7d
    ?>

    <h2>Führende Nullen</h2>

    <?php 
        $hrs = 4;
        $min = 3;
        printf('<p>Ausgabe der Uhrzeit: %02d:%02d </p>', $hrs, $min);    //04:03
        printf('<p>Ausgabe der Uhrzeit: %0002d:%0002d </p>', $hrs, $min);    //04:03
    ?>

    <h2>Zeichenketten ausfüllen</h2>

    <?php 
        printf ("<p>Ein aufgefüllter String: %'*7s</p>", 'TH'); //*****TH , der einzelne Ausführungsstrich (Maskierung) nach % sind wichtig
    ?>

    <h2>Formatierte Zahlenwerte</h2>
    <?php 
        $preise = array(22124.667, 12.8, 234, 53.333337, .5);   //22124.67 €

        foreach ($preise as $preis) {
            printf('Unser Preis: %03.2f €<br>', $preis);    // insgesamt 3 Stellen inkl. Komma (wenn das möglich ist), 2 nach der Komma und Datentyp float.
        }
    ?>

        <h2>Formatierte Zahlenwerte mit number_format()</h2>    

        <?php 
            echo '<p>';     // 22.124,67

            foreach ($preise as $preis) {
                echo number_format($preis, 2, ',' , '.').'<br>';
            }

            echo '</p>';
        ?>
        
</body>
</html>
