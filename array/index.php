<?php
define('LED_OFF', 0);
define('LED_G', 1);
define('LED_Y', 2);
define('LED_R', 3);

$led_machine = [
    [LED_G, LED_G, LED_G, LED_G, LED_G, LED_G, LED_G, LED_G],
    [LED_G, LED_Y, LED_Y, LED_Y, LED_Y, LED_Y, LED_Y, LED_G],
    [LED_G, LED_Y, LED_R, LED_R, LED_R, LED_R, LED_Y, LED_G],
    [LED_G, LED_Y, LED_R, LED_Y, LED_Y, LED_R, LED_Y, LED_G],
    [LED_G, LED_Y, LED_R, LED_Y, LED_Y, LED_R, LED_Y, LED_G],
    [LED_G, LED_Y, LED_R, LED_R, LED_R, LED_R, LED_Y, LED_G],
    [LED_G, LED_Y, LED_Y, LED_Y, LED_Y, LED_Y, LED_Y, LED_G],
    [LED_G, LED_G, LED_G, LED_G, LED_G, LED_G, LED_G, LED_G]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .row {
            display: flex;
        }

        .col {
            width: 30px;
            height: 30px;
        }

        .led-3 {
            background-color: red;
        }

        .led-2 {
            background-color: yellow;
        }

        .led-1 {
            background-color: green;
        }
    </style>
</head>
<body>
    <?php
    foreach ($led_machine as $row): ?>
        <div class="row">
            <?php for ($i = 0; $i < count($row); $i++): ?>
                <div class="col <?php print 'led-' . $row[$i]; ?>"></div>
            <?php endfor; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>