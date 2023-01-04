<?php
    
    session_start();
    require_once('functions.inc.php');
    $args = array(
        'Sessions',
        NULL,
        false,
        'Sessions - Daten auslesen'
    );
    get_header(...$args);

?>

<p>Die Daten aus dem Session-Cookie:</p>

<ul>
    <?php 
        foreach($_SESSION as $key => $value) {
            echo "<li>$key : $value</li>";
        }
    ?>
</ul>

<?php echo '<pre>', print_r($_POST, true), '</pre>'; ?>

<p>Weiter zur <a href="23-session-zerstoeren.php">nächsten Seite.</a></p>

<?php get_footer(); ?>
