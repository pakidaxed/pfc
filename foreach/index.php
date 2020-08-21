<?php
$game = [
    'objects' => [
        [
            'x' => 650,
            'y' => 10,
            'class' => 'car1'
        ],
        [
            'x' => 500,
            'y' => 450,
            'class' => 'car2'
        ],
        [
            'x' => 600,
            'y' => 950,
            'class' => 'car3'
        ],
        [
            'x' => 165,
            'y' => 300,
            'class' => 'thug'
        ]
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>THE GAME (foreach)</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="favicon.png"/>
</head>
<body>
<?php
//foreach ($game['objects'] as $object_id => $object) {
//    $object['on_fire'] = (bool)rand(true, false);
//    $object['is_target'] = !$object['on_fire'];
//    $game['objects'][$object_id] = $object;
//}
//?>
<div class="game-screen">
    <div class="game-menu">
        <div class="game-name">The Foreach Game
            <button id="btn_play">START</button>
            <button id="btn_replay">PLAY AGAIN?</button>
        </div>
    </div>
    <?php foreach ($game['objects'] as $object_id => $object): ?>
        <div id="ob-<?= $object_id; ?>" class="<?= $object['class']; ?> object"
             style="top: <?= $object['x']; ?>px; left: <?= $object['y']; ?>px;">
            <div class="target"></div>
        </div>
    <?php endforeach; ?>
    <div class="score"></div>
    <div class="missed-score"></div>
</div>
<audio id="audio_shot">
    <source src="shot.mp3" type="audio/mpeg">
</audio>
<audio id="audio_miss">
    <source src="miss.mp3" type="audio/mpeg">
</audio>
<audio id="audio_explosion">
    <source src="explosion.mp3" type="audio/mpeg">
</audio>
<audio id="audio_win">
    <source src="win.mp3" type="audio/mpeg">
</audio>
<script>
    const targets = <?= count($game['objects']); ?>
</script>
<script src="script.js"></script>
</body>
</html>
