<?php
    
    session_start();
    require_once('functions.inc.php');
    $args = array(
        'Sessions',
        NULL,
        false,
        'Sessions - Startseite'
    );
    get_header(...$args);
    
?>

<h2>Die Session wurde gestartet</h2>

<p>Session-ID: <?php echo session_id(); ?></p>
Name der Session: <?php echo session_name(); ?>

<p>Weiter zur <a href="20-formular.php">nächsten Seite.</a></p>

<?php get_footer(); ?>
