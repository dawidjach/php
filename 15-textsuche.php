<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="Chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übungsaufgaben</title>
</head>
<body>

    <h2>Übung 2 - Suche nach der „Nadel im Heuhaufen“</h2>


    <form action="05-textsuche.php" method="post">
        <p>Originaltext
            <textarea name="message" rows="10" cols="150">
            Am 5. März, Russland war gerade in die Ukraine einmarschiert, machte Ursula von der Leyen einen Fehler - der keiner war: "Die EU muss sich von ihrer Abhängigkeit von fossilen Brennstoffen befreien", twitterte die EU-Kommissionspräsidenten aus Sorge, Russland könnte Europa den Gashahn zudrehen, und lobte, dass "Spanien mit seinem hohen Anteil an erneuerbaren Energien und LNG-Kapazitäten ein Vorreiter" sei.
            Das Problem: Auch LNG, sogenanntes Flüssiggas, ist fossiles Gas. Es wird aus der Erde gepumpt, teils gefrackt und am Ende klimazerstörerisch verbrannt. Das ist auch von der Leyen bekannt. Trotzdem vermischt die Erfinderin des European Green Deals, mit dem der Kontinent sich dekarbonisieren soll, das Thema LNG mit dem Thema Erneuerbare Energien immer wieder.
            Diese Klima-Flunkerei könnte für Europa noch teuer werden - ökologisch und finanziell. Denn Infrastruktur, in die Europa milliardenschwer investiert, dürfte bald nutzlos oder viel teurer werden, will die EU die Klimakrise nicht weiter verschärfen.
            </textarea></p>
        <p>Suche nach
            <textarea name="search" rows="1" cols="60"></textarea></p>
        <p><input type="submit" name="submit" value="Zeichenkette suchen"></p>
    </form>
<?php



     if(isset($_POST['search'])) {
        if (empty($_POST['search'])) {
            echo '<p>Suchbegriff nicht vorhanden!</p>';
        } else {
            echo ('<p><font style="color:blue">Suche nach: "<b>'.$_POST['search'].'" </font>
            <font style="color:red">'.(substr_count ($_POST['message'], $_POST['search'])). ' Mal </font></b>
            <font style="color:blue">gefunden</font></p><br>');
            $_POST['message'] = str_replace($_POST['search'], '<b><font style="background-color:yellow">'.$_POST['search'].'</font></b>', $_POST['message']);
            echo $_POST['message'];
        }
    }

   ?>
</body>
</html>
