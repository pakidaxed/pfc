<?php
function confirm_password($password, $confirmed_password)
{

    return $password === $confirmed_password;
}
if ($_POST) {
    $email = trim(!empty($_POST['email']));

}
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
    $message = confirm_password($_POST['password'], $_POST['password_confirm']) ? 'Registracija sekminga' : 'Nesutampa PASS';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register form</title>
</head>
<body>
<div class="register-box">
    <form method="post">
        <div class="input">
            <legend>Email:</legend>
            <input type="email" name="email"/>
        </div>
        <div class="input">
            <legend>Password:</legend>
            <input type="password" name="password"/>
        </div>
        <div class="input">
            <legend>Confirm Password:</legend>
            <input type="password" name="password_confirm"/>
        </div>
        <div class="input">
            <input type="submit" value="Register"/>
        </div>
    </form>
    <?php if (isset($message)): ?>
        <div class="message-box"><?= $message; ?></div>
    <?php endif; ?>
</div>

</body>
</html>