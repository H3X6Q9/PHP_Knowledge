<?php
// 定义数组
$numbers1 = array(); // 旧的语法
$numbers2 = [];      // 新的语法

$numbers3 = array(1,2,3,4,5,6,7,8,9);
$numbers4 = [1,2,3,4,5,6,7,8,9];

// 查看数组内容
// print_r
print_r($numbers4);

echo '<br>';
echo '<br>';

// var_dump
var_dump($numbers4);

echo '<br>';
echo '<br>';

// var_export()
var_export($numbers4);

?>
