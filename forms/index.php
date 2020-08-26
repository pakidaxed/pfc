<?php
/**
 * @param $input
 * @return string
 */
function check_for_errors($input)
{
    if ($input == '0') $error = 'Is nulio nieko negausi';
    if (empty($input)) $error = 'Empty';
    return $error;
}

/**
 * @param int $input
 * @return int
 */
function double(int $input)
{
    return $input = $input ** 2;
}

if (isset($_POST['int'])) {
    check_for_errors($_POST['int']) ? $error = check_for_errors($_POST['int']) : $doubled = double($_POST['int']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMOS</title>
</head>
<body>
<form method="POST">
    <input type="number" name="int"/>
    <input type="submit"/>
</form>
<?php var_dump($_POST); ?>

<?php if (isset($doubled)): ?>
    <span><?= $doubled; ?></span>
<?php endif; ?>

<?php if (isset($error)): ?>
    <span style="border: 1px solid red;"><?= $error; ?></span>
<?php endif; ?>
</body>
</html>


