    <br>
    <h1>Klassendefinitionen</h1>

    <?php 
        class Mensch {
            // Liste der Eigenschaften
            
            // Sichtbarkeitsstufen:
            // - private - steht nur innerhalb der Klasse zur Verfügung,
            // - protected - wie private aber Zugriff aus der erbenden Klasse möglich,
            // - public - überall sichtbar und verwendbar.

            private $arme = 2; 
            private $beine = 2;
            private $name = '';
            public $augenfarbe = '';
        }

        $anna = new Mensch();
        $anna -> augenfarbe = 'blau';
        echo '<pre>', var_dump($anna), '</pre>';

        $feri = new Mensch();
        $feri -> name = 'Feri';
        echo '<pre>', var_dump($feri), '</pre>';    // Fehler! $name ist private!
     ?>
