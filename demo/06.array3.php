<?php
$numbers = [1,2,3,4,5,6,7,8,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($numbers as $k => $v):?>
        <li><?=$k?>:<?=$v?></li>
    <?php endforeach?>
    </ul>

    <ul>
    <?php foreach($numbers as $k => $v) {?>
        <li><?=$k?>:<?=$v?></li>
    <?php }?>
    </ul>

</body>
</html>
