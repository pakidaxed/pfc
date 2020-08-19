<?php
$distance = rand(1000, 2000); // Atstumas
$consumption = 12 / 100;      // Suvartojmas 100km
$price_l = 0.98;              // Kuro Kaina 1litro

$fuel_total = $distance * $consumption;
$price_trip = $fuel_total * $price_l;

$li_dist = "Nukeliautas atstumas: $distance km.";
$li_cons = "Kelioneje suvartota $fuel_total l kuro.";
$li_cost = "Kelione kainavo $price_trip EUR.";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP mokomes Hello World!</title>
</head>
<body>
<h1>Keliones skaicuokle</h1>
<ul>
    <li><?php print $li_dist; ?></li>
    <li><?php print $li_cons; ?></li>
    <li><?php print $li_cost; ?></li>
</ul>
</body>
</html>