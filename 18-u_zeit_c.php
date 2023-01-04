<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeitraum schätzen, Auswertung</title>
</head>
<body>
<?php
    
    $end = microtime(true);
    $start = (float)$_POST['start'];
    $diff = (int)$_POST['random_secs'];

    $estimated = round($end - $start, 2);

    $estim_perc = round(abs($diff - $estimated) / $diff * 100, 2);

    echo "<p>Differenz: $diff Sek.<br>Geschätzt: $estimated Sek.<br>Abweichung: $estim_perc%.</p>";
    
    echo "<p>Difference: $diff Sec.<br>Estimated: $estimated Sec.<br>Deviation: $estim_perc%.</p>";
    
?>
<a href="16-u_zeit_a.php">Nächster Versuch</a>
</body>
</html>
