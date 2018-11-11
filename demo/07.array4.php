<?php
$userinfo = [
    'name' => 'andy',
    'age' => 21,
    'gender' => 'man',
    'city' => '西安',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($userinfo as $key => $val):?>
        <li><?=$key?>: <?=$val?></li>
    <?php endforeach?>
    </ul>
</body>
</html>
