<?php
$bomb = 'https://i.imgur.com/1q8YiXb.png';
$explosion = 'https://i.pinimg.com/originals/a4/54/05/a454052e62b00974cfffcc4848ff9e3b.png';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP mokomes Hello World!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .bomb-box {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .bomb {
            background-image: url("<?php print $bomb; ?>");
            background-size: cover;
            width: <?php print 200 + date('s'); ?>px;
            height: <?php print 200 + date('s'); ?>px;
        }

        .\30\30 {
            background-image: url("<?php print $explosion; ?>") !important;
        }

        span {
            text-align: center;
            color: aqua;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="bomb-box">
    <div class="<?php print date('s'); ?> bomb"></div>
    <span class="<?php print date('s'); ?>"><?php print date('s'); ?></span>
</div>
</body>
</html>