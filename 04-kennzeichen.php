<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kennzeichen</title>
</head>
<body>
    <h1>Autozeichen und dazugehörige Städte</h1>
    <?php
        $kennzeichen = array(
                    'HH',
                    'B',
                    'S',
                    'F'
                );
        
        $kennzeichen['HH'] = 'Hamburg';
        $kennzeichen['B'] = 'Bremen';
        $kennzeichen['S'] = 'Stuttgart';
        $kennzeichen['F'] = 'Frankfurt';

        unset($kennzeichen['HB']);

        $kennzeichen['F'] = 'Frankfurt am Main';
    ?>


    <table style="border: 1px solid gray">
    <tr>
        <th>Kennzeichen</th>
        <th>Stadt</th>
    </tr>

    <?php foreach($kennzeichen as $kennzeichens) : ?>
        <tr>
            <?php foreach ($kennzeichen as $kz => $stadt) :  ?>
                <tr>
                    <td> <?php echo $kz; ?> </td>
                    <td> <?php echo $stadt; ?> </td>
                </tr>
            <?php endforeach; ?>
    <?php endforeach; ?>
    </table>


</body>
</html>
