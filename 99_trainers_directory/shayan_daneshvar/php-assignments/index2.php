<?php
$marks = [10,20,3,15,6,16];



$students = [[
    'name' => 'ali',
    'riazi' => '10',
    'fizik' => '14',
    'shimi' => '16'],
    ['name' => 'reza',
        'riazi' => '17',
        'fizik' => '12',
        'shimi' => '11'],
    ['name' => 'gholam',
        'riazi' => '0',
        'fizik' => '19',
        'shimi' => '20'],
    ['name' => 'naghi',
        'riazi' => '11',
        'fizik' => '10',
        'shimi' => '18']];
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorting</title>
</head>
<body>
<?php
var_dump($marks);
echo '<br/>';
rsort($marks);
echo '<br/>';
var_dump($marks);
echo '<br/>';

krsort($marks);
echo '<br/>';
var_dump($marks);
echo '<br/>';
echo '<br/>';
echo '<br/>';
var_dump($students);
echo '<br/>';
echo '<br/>';
echo '<br/>';
ksort($students);
var_dump($students)



?>
</body>
</html>
