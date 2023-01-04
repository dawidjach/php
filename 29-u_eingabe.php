<?php
require_once( '../includes/functions.inc.php' );
$database = 'hardware';
/* get_header(
*	string $title,
*	string/array $css=NULL,
*	bool $bootstrap=false,
*	string $header=NULL,
*	array $nav=NULL,
*	bool $fluid=false
* )
*/

$args = array(
    'Suchergebnisse',
    '../../css/styles.css',
    true
);
get_header( ...$args );
require_once( '../includes/pdo-connect.inc.php' );

// Prüfe, ob Formular gesendet wurde
if( isset( $_GET['suche'] ) ) {
    // Variable für das Such-Parameter vorbereiten
    // Die % sind Platzhalter für Zeichen, die vor oder nach dem Suchbegriff vorhanden sein können
    $suche = '%' . $_GET['suche'] . '%';

    // SQL-Abfrage mit Platzhalter ? wird in Variable gespeichert
    $sql = 'SELECT
        `hersteller`,
        `typ`,
        `gb`,
        `preis`,
        `artnummer`,
        `prod`
    FROM `fp`
    WHERE `hersteller` LIKE ?;';

    // SQL-Abfrage wird an den SQL-Server gesendet
    // und ein Statement-Objekt ($stmt) erstellt
    if( $stmt = $db->prepare( $sql ) ) {
        // Ausführung der SQL-Abfrage
        // als Parameter werden die zu ersetzenden Suchbegriffe als Array angegeben
        $stmt->execute( [$suche] );
    ?>

    <table class="table">
        <tr>
            <th>Hersteller</th>
            <th>Typ</th>
            <th>GB</th>
            <th>Preis</th>
            <th>Artnr.</th>
            <th>Datum</th>
        </tr>

        <!-- Tabellenzeilen mit den Zellen werden in der foreach-Schleife ausgegeben
        Jeder gefundene Datensatz wird in der Variable $row abgelegt -->
        <?php foreach( $stmt->fetchAll() as $row ): ?>
            <tr>
                <td><?php echo $row['hersteller']; ?></td>
                <td><?php echo $row['typ']; ?></td>
                <td><?php echo $row['gb']; ?></td>
                <td><?php echo $row['preis']; ?></td>
                <td><?php echo $row['artnummer']; ?></td>
                <td><?php echo $row['prod']; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php
    }

}
?>
<a href="29-u_db_eingabe.php?suche=">Alle anzeigen</a>
<a href="http://localhost/php/">Menu</a></p>


<?php get_footer(); ?>
