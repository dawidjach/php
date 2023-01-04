<?php
    
    session_start();
    require_once('functions.inc.php');
    $args = array(
        'Sessions',
        NULL,
        false,
        'Sessions - Formular'
    );
    get_header(...$args);
    
?>

<h2>Formular</h2>

<form action="21-auswertung.php" method="post">
    <p>Vorname: <input type="text" name="vorname"></p>
    <p>Nachname: <input type="text" name="nachname"></p>
    <p>Wohnort: <input type="text" name="ort"></p>
    <p><input type="submit" name="" value="senden"></p>
</form>

<?php get_footer(); ?>
