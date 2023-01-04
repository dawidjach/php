<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeichenkettenfunktionen</title>
</head>
<body>
    <h1>Zeichenkettenfunktionen</h1>

    <?php 
        $e_mail = 'Brigitte.B@abc.com';
        echo "<p>Original-Zeichenkette: <b>$e_mail</b></p>";

        /* Zeichenkette finden */
        echo '<h3>Zeichenkette finden</h3>';

        echo '<p>';
        echo 'Suche nach B@ ergibt: <b>' .strstr($e_mail, 'B@'). '</b><br>';    // B@abc.com
        echo 'Suche nach B@ ergibt: <b>' .strstr($e_mail, 'B@', true). '</b><br>';  // Brigitte.
        echo 'Suche nach B@ ergibt: <b>' .strstr($e_mail, 'b@'). '</b><br>';  // nichts - funktion unterscheidet kleine und große Buchstaben
        echo 'Suche nach B@ ergibt: <b>' .stristr($e_mail, 'b@'). '</b><br>';  // B@abc.com
        echo '</p>';

        /* Einzelne Zeichen finden */
        echo '<h3>Einzelne Zeichen finden</h3>';

        echo '<p>';
        echo '<Suche nach i ergibt: <b>' .strchr($e_mail, 'i'). '</b><br>'; // erste i von vorne suchen (igitte.B@abc.com)
        echo '<Suche nach i ergibt: <b>' .strrchr($e_mail, 'i'). '</b><br>';    // erste i von hinten suchen (itte.B@abc.com)
        echo '</p>';

        /* Neue Zeichenketten-Funktionen seit PHP 8 */
        echo '<h3>Neue Zeichenketten-Funktionen seit PHP 8</h3>';

        echo '<p>';
        echo 'Suche nach g ergibt: <b>' .str_contains($e_mail, 'g'). '</b></br>';  // true, 1
        echo 'Suche nach z ergibt: <b>' .str_contains($e_mail, 'z'). '</b></br>';  // false
        echo '</p>';       
        
        echo '<p>';
        echo 'Suche nach Bri ergibt: <b>' .str_starts_with($e_mail, 'Bri'). '</b></br>';  // true, 1
        echo 'Suche nach Bri ergibt: <b>' .str_ends_with($e_mail, 'Bri'). '</b></br>';  // false
        echo 'Suche nach .com ergibt: <b>' .str_starts_with($e_mail, '.com'). '</b></br>';  // false
        echo 'Suche nach .com ergibt: <b>' .str_ends_with($e_mail, '.com'). '</b></br>';  // true, 1
        echo '</p>';

        /* Einzelne  Zeichen finden, Position (index) zurückliefern */
        echo '<h3>Einzelne  Zeichen finden, Position zurückliefern</h3>';

        echo '<p>';
        echo 'Suche nach i ergibt Index: <b>' .strpos($e_mail, 'i'). '</b></br>';
        echo 'Suche nach i ergibt Index: <b>' .strrpos($e_mail, 'i'). '</b></br>';
        echo 'Suche nach b ergibt Index: <b>' .stripos($e_mail, 'b'). '</b></br>';

        /* Beginn der Suche angeben */
        echo '<h3>Beginn der Suche angeben</h3>';

        echo 'Suche nach i ergibt Index: <b>' .strpos($e_mail, 'i'). '</b></br>';
        echo '</p>';

        echo 'Domainnamen extrahieren: <b>' .substr($e_mail, 18). '</b><br>';
        echo 'Domainnamen extrahieren: <b>' .substr($e_mail, -19). '</b><br>';
        echo '</p>';


        /* Nach Position extrahieren */
        echo '<h3>Nach Position extrahieren</h3>';

        $adressen = array (
            'Brigitte.B@abc.com',
            'meister.nadeloehr@wie-ist-meine-ip.de',
            'ben.a@gmx.de'
        );
        echo '<p>';

        foreach ($adressen as $adresse) {
            $pos = strpos($adresse, '@');
            echo 'Domainname: <b>' .substr($adresse, $pos+1). '</b></br>';
        }
        echo '</p>';

        /* Anzahl der gefundenen Treffer */
        echo '<h3>Anzahl der gefundenen Treffer</h3>';
        
        echo '<p>Gefundene Treffer für <i>ei</i> in <b>' .$e_mail. '</b> genau <b>'
        .substr_count($e_mail, 'ei') .'-mal </b> vor.</p>';

        /* Suchen und Ersetzen */
        echo '<h3>Suchen und Ersetzen</h3>';

        $str = 'Buch buchen';
        echo '<p>' .strtr($str, 'ch', 'xx'). '</p>';   // wird nicht funktionieren! Anzahl der Buchstaben muss gleich sein

        $tausch = array ('u' => 'au', 'ch'=>'sch');
        echo '<p>' .strtr($str, $tausch). '</p>'; 
        
        $str = 'Meine Tante lebt in Frankreich. Meine Tante ist noch nicht so alt.';
        $str = str_replace('Tante', '<i>Nichttante</i>', $str);
        $str = str_replace('Frankreich', '<i>Nichtfrankreich</i>', $str);
        echo "<p>$str</p>";
    


        /* Anzahl der Bytes einer Zeichenkette */
        echo '<br><h3>Anzahl des Bytes einer Zeichenkete</h3>';
        $str1 = 'Hauser'; $str2 = 'Häuser';

        echo '<p>Die Zeichenkette <i>' .$str1. '</i> besteht aus <b>' .strlen($str1). '</b> Bytes</p>';
        echo '<p>Die Zeichenkette <i>' .$str2. '</i> besteht aus <b>' .strlen($str2). '</b> Bytes</p>';


        /* Seit PHP 7 neue Multibyte-Funktionen */
        echo '<br><p><i><u><b>Seit PHP 7 neue Multibyte-Funktionen:</b></u></i></p>';

        echo '<p>Die Zeichenkette <i>' .$str1. '</i> besteht aus <b>' .mb_strlen($str1). '</b> Bytes</p>';
        echo '<p>Die Zeichenkette <i>' .$str2. '</i> besteht aus <b>' .mb_strlen($str2). '</b> Bytes</p>';
        
        ?>
    
</body>
</html>
