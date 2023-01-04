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

<h3>Bitte geben Sie die Bestellmenge an (Einheit: 500-g-Glass):</h3>

<form action="25-u_bestellung.php" method="post">
    <p>Akazienhonig <input type="number" name="akazien" min="1" max="15"></p>
    <p>Heidehonig <input type="number" name="heide" min="1" max="15"></p>
    <p>Kleehonig <input type="number" name="klee" min="1" max="15"></p>
    <p>Tannenhonig <input type="number" name="tannen" min="1" max="15"></p>

    <p><input type="submit" name="" value="Abschicken"></p>
</form>

<?php 
    $_SESSION = array();
    if(session_destroy()) {
            echo '';
        } else {
            echo '';
        }
?>

<?php get_footer(); ?>
