<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeitraum schätzen, Stop</title>
</head>
<body>
<?php
    
    $random_secs = $_POST['random_secs'];
    $start = microtime(true);
    
?>

<p>Betätigen Sie <?php echo $random_secs; ?> Sekunden nach dem Erscheinen dieser Seite die Schaltfläche Stop. Anschließend erfahren Sie, wie gut Sie Zeiträume schätzen können.</p>

<p lang="en">Press the Stop button <?php echo $random_secs; ?> seconds after this page appears. Then you will learn how good you are at estimating periods of time.</p>

<form action="18-u_zeit_c.php" method="post">
    <input type="hidden" name="random_secs" value="<?php echo $random_secs ?>">
    <input type="hidden" name="start" value="<?php echo $start ?>">
    <input type="submit" value="Stop">
</form>
</body>
</html>
