<?php 
    class Mensch {
        // Eigenschaften
        private $arme = 2;
        private $beine = 2;
        private $erschoepfung = 0;
        private $zufriedenheit = 0;
        private $name = '';
        private $geschlecht = '';
        private $augenfarbe = '';
        private $haarfarbe = '';

        // Methoden
        function __construct($name, $geschlecht, $augenfarbe, $haarfarbe) {
            $this -> name = $name;
            $this -> geschlecht = $geschlecht;
            $this -> augenfarbe = $augenfarbe;
            $this -> haarfarbe = $haarfarbe;
        }
        // ...weitere Methoden
        function __destruct() {
            echo '<p>'.this->name.' wird gelöscht</p>';
        }
    }

    $anna = new Mensch('Anna', 'weiblich', 'blau', 'schwarz');
    $paul = new Mensch('Paul', 'diverse', 'braun', 'glatze');

    echo '<pre>';
    print_r( $anna );
    echo '</pre>';

    echo '<pre>';
    print_r( $paul );
    echo '</pre>';


?>
