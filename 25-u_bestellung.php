<?php
    
    session_start();
    require_once('functions.inc.php');
    $args = array(
        'Sessions',
        NULL,
        false,
        'Sessions - Honigbestellung'
    );
    get_header(...$args);
    
?>

<h3>Sie haben folgende Menge bestellt:</h3>

<?php
if (isset($_POST)) {
    if(!empty($_POST['akazien'])) {
        $_SESSION['akazien'] = $_POST['akazien'];
        echo '<p>Akazienhonig: '.$_SESSION['akazien'].' Gläser<br>';
    } 
    if (!empty($_POST['heide'])) {
        $_SESSION['heide'] = $_POST['heide'];
        echo 'Heidehonig: '.$_SESSION['heide'].' Gläser<br>';
    } 
    if (!empty($_POST['klee'])) {
        $_SESSION['klee'] = $_POST['klee'];
        echo 'Kleehonig: '.$_SESSION['klee'].' Gläser<br>';
    } 
    if (!empty($_POST['tannen'])) {
        $_SESSION['tannen'] = $_POST['tannen'];
        echo 'Tannenhonig: '.$_SESSION['tannen'].' Gläser</p>';
    }
}

?>

<br>
<p>Die Session-ID lautet: <?php echo session_id(); ?></p>
<br>
<p><a href="26-u_abschluss.php">Weiter zur Eingabe persönlicher Daten </a> und dem Abschluss der Bestellung.</p>
