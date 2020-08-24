<?php
$game = [
    'player' => [
        'health' => rand(0, 73),
        'armor' => rand(1, 33),
        'ammo' => '',
        'money' => 1000,
        'money_d' => '',
        'wanted' => 0,
        'wanted_d' => '',
        'kills' => 0
    ],
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
    ],
    'weapons' => [
        [
            'name' => 'Dildo',
            'type' => 'melee',
            'active' => false,
            'damage' => 5,
            'class' => 'dildo'
        ],
        [
            'name' => 'Bat',
            'type' => 'melee',
            'active' => false,
            'damage' => 10,
            'class' => 'bat'
        ],
        [
            'name' => 'Desert Eagle',
            'type' => 'pistols',
            'active' => false,
            'ammo' => rand(10, 50),
            'damage' => 55,
            'class' => 'desert-eagle'
        ]
    ],
];

$game['weapons'][rand(0, 2)]['active'] = true; // NUSTATOM RANDOM GINKLA

foreach ($game['weapons'] as $weapon) {
    if ($weapon['active']) $game['player']['weapon'] = $weapon['class'];
    if ($weapon['active'] && $weapon['type'] != 'melee') $game['player']['ammo'] = $weapon['ammo'];
}

foreach ($game['objects'] as $object_id => $object) {
    $object['on_fire'] = (bool)rand(true, false);
    $object['is_target'] = !$object['on_fire'];
    $game['objects'][$object_id] = $object;

    if ($object['on_fire']) {
        $game['player']['kills']++;
        $game['player']['money'] += 200;
    }
    $game['player']['money_d'] = '$' . str_pad($game['player']['money'], 8, '0', STR_PAD_LEFT);
}

for ($i = 1; $i <= 6; $i++) { // 6 tai max zvaigzduciu
    $i <= $game['player']['kills'] ? $game['player']['wanted_d'] .= '☆' : $game['player']['wanted_d'] .= '★';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GTA HUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hud-box">
    <div class="hud-combine">
        <div class="hud-item">
            <div class="hud-weapon <?= $game['player']['weapon'] ?>"></div>
        </div>
        <div class="hud-item">
            <div class="hud-combine-col">
                <div class="hud-time"><?= date('H:i') ?></div>
                <div class="hud-item hud-progress-armor">
                    <div class="hud-armor" style="width: <?= $game['player']['armor'] ?>%"></div>
                </div>
                <div class="hud-item hud-ammo"><?= $game['player']['ammo'] ?></div>
            </div>
        </div>

    </div>
    <div class="hud-item hud-progress-health">
        <div class="hud-health" style="width: <?= $game['player']['health'] ?>%"></div>
    </div>
    <div class="hud-item hud-money">
        <?= $game['player']['money_d'] ?>
    </div>
    <div class="hud-item">
        <?= $game['player']['wanted_d'] ?>
    </div>
</div>
</body>
</html>
