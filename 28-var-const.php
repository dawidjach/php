<br>
<h1>var-const</h1>

<?php 
    class Mensch {
        static $count;  // Klassenvariable

        const MAX_ALTER = 122;  // ältester Mensch

        // Eigenschaften
        private $zufriedenheit = 0;

        // Methoden (Methoden == Funktionen)
        function arbeiten($dauer) {
            self::$count++;     // Zugriff auf Klassenvariable

            $this->zufriedenheit += $dauer / 4; // $this - Referenz auf das aktuelle Objekt
            echo '<p>('.self::$count.')Arbeit macht zufrieden...</p>';
        }
        
        function ausruhen($dauer) {
            self::$count++;
            
            $this -> zufriedenheit += $dauer / 2 ;
            echo '<p>('.self::$count.')Ausruhen ist besser!!!</p>';
            
        }
    }

    // Eigenschaften ändern / überschreiben:
    $anna = new Mensch();
    $anna -> arbeiten(8);
    $anna -> ausruhen(6);
    $anna -> arbeiten(4);

    $paul = new Mensch();
    $paul -> arbeiten(12);
    $paul -> ausruhen(2);
    $paul -> arbeiten(5);

    echo '<p>Insgesamt sind die Methoden der Klasse Mensch' .Mensch::$count. 'Mal aufgerufen worden</p>';
    echo '<p>Der älteste Mensch, eine französische Frau, wurde '.Mensch::MAX_ALTER.' Jahre alt</p>';


?>
