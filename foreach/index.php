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
//        [
//            'x' => 165,
//            'y' => 300,
//            'class' => 'thug'
//        ]
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>THE GAME (foreach)</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
foreach ($game['objects'] as $object_id => $object) {
    $object['on_fire'] = (bool)rand(true, false);
    $object['is_target'] = !$object['on_fire'];
    $game['objects'][$object_id] = $object;
}
?>
<?php foreach ($game['objects'] as $object_id => $object): ?>
    <div id="ob-<?= $object_id; ?>" class="<?= $object['class']; ?> object" style="top: <?= $object['x']; ?>px; left: <?= $object['y']; ?>px;">
        <div class="target"></div>


    </div>
<?php endforeach; ?>


<script>
    const object = document.querySelectorAll(".object")
    addEventListener('click', ob => {
        console.log(ob.path[0].id)
        const selector = '#' + ob.path[0].id + '>div'
        const id = document.querySelector(selector)
        id.classList.remove("target")
        id.classList.add("on-fire")
        setTimeout(() => {
            id.classList.remove("on-fire")
            id.classList.add("burned");
            ob.path[0].classList.add("burned")
        }, 1500);

    })
</script>
</body>
</html>
