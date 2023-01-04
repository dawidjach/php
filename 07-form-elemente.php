<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswertung verschiedener Formular-Elemente</title>
</head>
<body>
    <h1>Auswertung verschiedener Formular-Elemente</h1>

    <?php 
        // eine Bedinung prüfen - hier E-Mail
        if(isset($_POST['e-mail'])) {

            // ist das Pflichtfeld (E-Mail) gefüllt? 
            // empty() - prüft ob das übergebene Element leer, NULL oder nicht vorhanden ist,
            // trim() - entfernt Leerzeichen, Tab-Sprünge etc. (Whitespaces) links und rechts vom Inhalt.
            if(empty(trim($_POST['e-mail']))) {
                echo '<p>Mail ist leer</p>';
            } else {
                echo '<p>Mail-Adresse: '.$_POST['e-mail'].'</p>';
            }

            // Prüfe ob Eissorte ausgewählt wurde
            if($_POST['eissorte'] == -1) {
                echo '<p>Eissorte wurde nicht gewählt</p>';
            } else {
                echo '<p>Eissorte: '.$_POST['eissorte']. '</p>';
            }

            // Ausgabe der Nachricht mit nl2br-Funktion (macht in Nachrichten Abstand zw. Linien - new line with 2 breaks <br>)
            echo '<p>Ihre Nachricht: <br>' .nl2br($_POST['message']). '</p>';

            echo '<pre>', print_r($_POST, true), '</pre>';
            } else {
            echo '<p>Diese Seite wurde nicht ein Formular aufgerufen. Bitte füllen Sie zunächst das <a href="01-form-elemente.html">Formular </a>aus! </p>';
            }
    ?>
</body>
</html>
