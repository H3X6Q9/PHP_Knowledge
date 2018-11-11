<?php
// 关联数组
$user = [
    'name' => 'andy',
    'age' => 21,
    'gender' => 'man',
    'city' => '西安',
];

// 访问数组元素
echo $user['name'];

// 修改数组元素
$user['age'] = 55;
echo $user['age'];

// 添加数组元素
$user['major'] = 'computer';
print_r($user);

// 删除数组元素
unset($user['major']);
print_r($user);

echo '<hr>';

// 索引数组
$numbers = [1,2,3,4,5];

// 访问数组元素
echo $numbers[2];
// 修改数组元素
$numbers[2] = 88;
echo $numbers[2];
// 添加数组元素
$numbers[] = 99;
echo $numbers[5];
// 删除数组元素
unset($numbers[5]);
echo $numbers[5];
?>
