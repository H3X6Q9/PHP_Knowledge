<?php
$users = [
    [
        'name' => 'andy',
        'age' => 21,
        'gender' => 'man',
        'city' => '西安',
    ],
    [
        'name' => 'kiily',
        'age' => 24,
        'gender' => 'women',
        'city' => '上海',
    ],
    [
        'name' => 'soga',
        'age' => 22,
        'gender' => 'man',
        'city' => '上海',
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr><th>姓名</th><th>城市</th><th>年龄</th><th>性别</th></tr>
        <?php foreach($users as $key => $user):?>
        <tr>
            <td><?=$user['name'];?></td>
            <td><?=$user['city'];?></td>
            <td><?=$user['age'];?></td>
            <td><?=$user['gender'];?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
