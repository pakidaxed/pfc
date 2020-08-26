<?php
$size = intval($_POST['size'] ?? 100);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider Image Size</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="form">
    <form method="POST">
        <input type="range" name="size" min="100" max="1000" value="<?= $size; ?>"/>
        <input type="submit" value="Change the size"/>
    </form>
</div>
<img src="ikrai.png" width="<?= $size; ?>" alt="Ikru nuotrauka"/>
</body>
</html>
