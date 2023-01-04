<?php
    
    session_start();
    require_once('functions.inc.php');
    $args = array(
        'Sessions',
        NULL,
        false,
        'Sessions - Auswertung, Daten speichern'
    );
    get_header(...$args);
    
?>

<p>Sie haben folgende Daten im Formular übertragen:</p>

<p>Vorname: <?php echo $_POST['vorname']; ?><br>
Nachname: <?php echo $_POST['nachname']; ?><br>
Wohnort: <?php echo $_POST['ort']; ?></p>

<?php 

$_SESSION['vorname'] = $_POST['vorname'];
$_SESSION['nachname'] = $_POST['nachname'];
$_SESSION['ort'] = $_POST['ort'];

$_SESSION['zeit'] = time();

?>

<p>Folgende Daten sind nun im Session-Cookies gespeichert:</p>
<?php echo '<pre>', var_dump($_SESSION), '</pre>'; ?>

<p>Weiter zur <a href="22-auslesen.php">nächsten Seite.</a></p>

<?php get_footer(); ?>
