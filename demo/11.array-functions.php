<?php
$numbers = array(1,2,3,4,5,6,7,8,9);
$string = implode(',', $numbers);
echo $string;
echo '<hr>';
$array = explode(',', $string);
print_r($array);

echo '<hr>';

$user = [
    'name' => 'andy',
    'age' => 21,
    'gender' => 'man',
    'city' => '西安',
];

$keys = array_keys($user);
print_r($keys);
$values = array_values($user);
print_r($values);

echo '<hr>';

$val = array_pop($user);
print_r($val);
print_r($user);

array_push($user, '西安');
print_r($user);

echo '<hr>';

$val = array_shift($user);
print_r($val);
print_r($user);
array_unshift($user, 'andy');
print_r($user);

echo '<hr>';
$numbers = array(1,2,3,4,5,6,7,8,9);
$len = count($numbers);
echo $len;

for($i = 0; $i < $len; $i++) {
    echo $numbers[$i];
}
?>
