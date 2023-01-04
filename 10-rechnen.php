<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ein kleines Rechenbeispiel</title>
</head>
<body>
    <h1>Ein kleines Rechenbeispiel</h1>
    <?php 
        $zahl1 = 0; $zahl2 = 0;

        if(isset($_POST['plus']) OR isset($_POST['mal'])) {
            $ergebnis = 0;
            $op = '';
            $zahl1 = (double)$_POST['zahl1'];
            $zahl2 = (double)$_POST['zahl2'];

            if(isset($_POST['plus'])) {
                $ergebnis = $zahl1 + $zahl2;
                $op = 'Addition';
            } elseif(isset($_POST['mal'])) {
                $ergebnis = $zahl1 * $zahl2;
                $op = 'Multiplikation';
            }

            echo "<p>Das Ergebnis der $op ist $ergebnis (" .gettype($ergebnis) . ")</p>";

            //echo '<pre>', var_dump( $_POST, $zahl1 ), '</pre>';
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Erste Zahl: <input type="text" name="zahl1" value="<?php echo $zahl1; ?>"></p>
        <p>Zweite Zahl: <input type="text" name="zahl2" value="<?php echo $zahl2; ?>"></p>
        <p>
            <input type="submit" value="+" name="plus">
            <input type="submit" value="x" name="mal">
        </p>
    </form>

</body>
</html>
