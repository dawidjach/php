<?php 
/*     foreach(PDO::getAvailableDrivers() as $treiber) echo $treiber.
    '<br>'; */
    
    // Ausgabe von MySQLI Fehlermeldungen erzwingen. Der Standard-Wert wurde mit PHP 8.1 geändert!
    // nur für die Entwicklung! Im Produktiv-Modus bitte wieder entfernen.
    mysqli_report(MYSQLI_REPORT_OFF);

    // Konstanten für die Zugangsdaten anlegen
    define('DB_USER', 'dawid');
    define('DB_PW', '6si_isScWIYg4wQd');
    define('DB_HOST', 'localhost');
    define('DB_NAME', $database);

    // Datenbank-Server verbinden mit neuem PDO-Objekt
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PW);

?>
