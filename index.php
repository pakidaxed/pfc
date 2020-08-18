<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP mokomes Hello World!</title>
    <style>
        .bomb {
            background-image: url("https://www.pngitem.com/pimgs/m/40-408175_bomb-transparent-cs-go-csgo-c4-transparent-hd.png");
            background-size: cover;
            width: <?php print 100 + date('s'); ?>px;
            height: <?php print 100 + date('s'); ?>px;
            position: relative;
        }

        span {
            text-align: center;
            color: aqua;
            font-size: 25px;
            font-weight: bold;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
<div class="bomb">
<span><?php print date('s'); ?></span>
</div>
</body>
</html>