<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung 1 - Formular</title>
</head>
<body>
    <h1>Übung 1 - Formular</h1>

    <?php 
        if(empty(trim($_POST['message']))) {
            echo '<p>Die Nachricht ist leer</p>';
        } else {
            echo '<pre>Die Nachricht ist: ', print_r($_POST), '</p>';
        }
    ?>
</body>
</html>
