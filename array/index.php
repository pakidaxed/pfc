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
            background-color: white !important;
            transition: background-color 1.5s;
        }

        .col.no-bg-no-transition {
            background-color: black !important;
            transition: background-color 0.5s;
        }

        .col.reset-bg {
            background-color: black;
            transition: background-color 0.5s;
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
<input type="button" id="reset" value="Reset all"/>
<script>
    addEventListener("click", e => {
        e.path[0].classList.toggle("no-bg")
    })
    document.getElementById("reset").addEventListener("click", cl => {
        const col = document.querySelectorAll(".col")
        let time = 0
        let removeTime = 10 * col.length + 20
        let resetTime = removeTime

        col.forEach(x => {
            time += 10
            resetTime += 20
            setTimeout(() => {
                x.classList.add("no-bg-no-transition");
            }, time);
            setTimeout(() => {
                x.classList.remove("no-bg-no-transition")
                x.classList.add("reset-bg")
            }, removeTime);
            setTimeout(() => {
                x.classList.remove("reset-bg")
                x.classList.remove("no-bg")
            }, resetTime);
        })
    })
</script>
</body>
</html>