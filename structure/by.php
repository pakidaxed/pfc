<?php
function purify(array &$array, array $inputs): array
{
    if (isset($inputs['extras'])) modify_extras($inputs['extras']);
    foreach ($inputs as $key => &$info) {
        $array[$key] = trim(empty($info)) ? 'Unknown' : $info;
    }
    return $inputs;
}

function modify_extras(array &$extras): string
{
    $scars = 'Have scars and looks very aggressive';
    $gun = 'Have his own gun';
    $can_kill = 'Licensed to kill';

    $extras_display = '';
    foreach ($extras as $extra) {
        $extras_display .= ${$extra} . ', ';
    }
    return $extras = substr($extras_display, 0, -2);
}

$candidate = [];

if (isset($_POST)) {
    purify($candidate, $_POST);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form to BY Army</title>
    <link rel="stylesheet" href="by.css"/>
</head>
<body>
<div class="container">

    <?php if ($candidate): ?>
        <div class="certificate-box">
            <div class="by-force-logo"></div>
            <p>Certificate to BY Force</p>
            <span>BY <?= rand(1000, 9999); ?></span>
            <div class="certificate-info">
                <div class="item">Firstname: <span><?= $candidate['first_name']; ?></span></div>
                <div class="item">Lastname: <span><?= $candidate['last_name']; ?></span></div>
                <div class="item">Age: <span><?= $candidate['age']; ?></span></div>
                <div class="item">Spec: <span><?= $candidate['spec']; ?></span></div>
                <?php if ($candidate['extras']): ?>
                <div class="item">Extra: <span><?= $candidate['extras']; ?></span></div>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
    <h2>Form for joining the BY Force</h2>
        <div class="form-box">
            <form method="post">
                <div class="input">
                    <legend>Name:</legend>
                    <input type="text" name="first_name" required/>
                </div>
                <div class="input">
                    <legend>Lastname:</legend>
                    <input type="text" name="last_name" required/>
                </div>
                <div class="input">
                    <legend>Age:</legend>
                    <input type="number" name="age"/>
                </div>
                <div class="input">
                    <div class="input">
                        <legend>Specialization:</legend>
                        <input type="radio" id="newbie" name="spec" value="Newbie" checked/>
                        <label for="newbie">Newbie</label>
                    </div>
                    <div class="input">
                        <input type="radio" id="omon" name="spec" value="OMON"/>
                        <label for="omon">OMON</label>
                    </div>
                    <div class="input">
                        <input type="radio" id="army" name="spec" value="Army man"/>
                        <label for="army">Army man</label>
                    </div>
                    <div class="input">
                        <input type="radio" id="pro" name="spec" value="Professional"/>
                        <label for="pro">Professional</label>
                    </div>
                    <div class="input">
                        <legend>Extras:</legend>
                        <input type="checkbox" id="extra1" name="extras[]" value="scars"/>
                        <label for="extra1">I have scars</label>
                        <input type="checkbox" id="extra2" name="extras[]" value="gun"/>
                        <label for="extra2">I have my own gun</label>
                        <input type="checkbox" id="extra3" name="extras[]" value="can_kill"/>
                        <label for="extra3">Licensed to kill</label>
                    </div>
                    <div class="input">
                        <input type="submit" value="Join the Force"/>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>
</div>
</body>
</html>