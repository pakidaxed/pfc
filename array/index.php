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
            border: 1px solid black;
            box-sizing: border-box;
        }

        .col:hover {
            transform: scale(1.3);
            cursor: pointer;
        }

        .col.led-3 {
            background-color: red;
        }

        .col.led-2 {
            background-color: yellow;
        }

        .col.led-1 {
            background-color: green;
        }

        .col.no-bg {
            background-color: black !important;
            transition: background-color 1.5s;
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
<p>Press the LED you want to turn it off.</p>
<script>
    addEventListener("click", e => {
        e.path[0].classList.toggle("no-bg")
    })
</script>
</body>
</html>