<?php
    
    session_start();
    require_once('functions.inc.php');
    $args = array(
        'Sessions',
        NULL,
        false,
        'Sessions - Honigbestellung - Abschluss'
    );
    get_header(...$args);

?>

<p>Bitte geben Sie noch Kontaktdaten ein:</p>

<form action="" method="post">
    <p>Vorname <input type="text" name="vorname"></p>
    <p>Nachname <input type="text" name="nachname"></p>
    <p>Wohnort <input type="text" name="wohnort"></p>
    <p>E-Mail: <input type="email" name="email"></p>

    <p><input type="submit" name="submit" value="Abschicken"></p>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST)) {
    echo '<p>Dies sind die in der Session gesammelte Daten:</p>';
    if(!empty($_SESSION['akazien'])) {
        echo '<p>Akazienhonig: '.$_SESSION['akazien'].' Gläser<br>';
    } else {
        echo '<p>Akazienhonig: 0 Gläser<br>';
    }
    if (!empty($_SESSION['heide'])) {     
        echo 'Heidehonig: '.$_SESSION['heide'].' Gläser<br>';
    } else {
        echo 'Heidehonig: 0 Gläser<br>';
    }
    if (!empty($_SESSION['klee'])) {
        echo 'Kleehonig: '.$_SESSION['klee'].' Gläser<br>';
    } else {
        echo 'Kleehonig: 0 Gläser<br>';
    }
    if (!empty($_SESSION['tannen'])) {
        echo 'Tannenhonig: '.$_SESSION['tannen'].' Gläser<br>';
    } else {
        echo 'Tannenhonig: 0 Gläser<br>';
    }

    if(!empty($_POST['vorname'])) {
        $_SESSION['vorname'] = $_POST['vorname'];
        echo 'Vorname: '.$_SESSION['vorname'].'<br>';   
    } 
    if(!empty($_POST['nachname'])) {
        $_SESSION['nachname'] = $_POST['nachname'];
        echo 'Nachname: '.$_SESSION['nachname'].'<br>';   
    } 
    if(!empty($_POST['wohnort'])) {
        $_SESSION['wohnort'] = $_POST['wohnort'];
        echo 'Wohnort: '.$_SESSION['wohnort'].'<br>';   
    } 
    if(!empty($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
        echo 'Email: '.$_SESSION['email'].'</p>';   
    } 
}

?>

<p>Damit ist die Session beendet. <a href="u_formular.php">Klicken Sie hier, </a>um eine neue Session zu beginnen.</p>


<?php get_footer(); ?>
