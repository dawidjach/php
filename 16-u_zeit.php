<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeitraum schätzen, Start</title>
</head>
<body>
    <?php $random_secs = random_int(5,10); ?>
    <p>Nach dem Betätigen der Schaltfläche 'Start' erscheint eine neue Seite. Betätigen Sie <?php echo $random_secs ?> Sekunden nach dem Erscheinen dort die Schaltfläche 'Stop'. Anschließend erfahren Sie, wie gut Sie Zeiträume schätzen können.</p>

    <p lang="en">After pressing the 'Start' button, a new page appears. Press the 'Stop' button <?php echo $random_secs ?> seconds after it appears there. Then you will learn how good you are at estimating periods of time.</p>

    <form action="17-u_zeit_b.php" method="post">
        <input type="hidden" name="random_secs" value="<?php echo $random_secs; ?>">
        <input type="submit" value="Start">
    </form>
</body>
</html>
