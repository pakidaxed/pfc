<?php
$money = rand(10, 40);
$beer_price = 3;

$beer_image = '<img src="https://banner.uclipart.com/20200112/rht/beer-beer-glass-pint-glass.png" alt="pilnas bokalas" width="100" />';
$beer_image_empty = '<img src="https://media.tiffany.com/is/image/Tiffany/EcomItemL2/wheat-beer-glass-24399079_867643_ED.jpg" alt="pilnas bokalas" width="100" />';

$total_beers = floor($money / 3);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP PHP mokomes Hello World!</title>
</head>
<body>
<div>Viso bokalu: <?php print $total_beers; ?></div>

<?php
$finish_time = date('H:i');
$drunk_status = 'A';
for ($i = 1; $i <= $total_beers; $i++) {
    print $finish_time . ' - ';
    print $i * $beer_price . ' EUR';
    print $i % 4 === 0 ? $drunk_status .= 'A' : $drunk_status;
    print str_repeat($beer_image_empty, $i - 1);
    print $beer_image;
    print '<br />';
    $drink_duration = rand(20, 30);
    $finish_time = date('H:i', strtotime("$finish_time +$drink_duration minutes"));
}
?>
</body>
</html>