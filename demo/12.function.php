<?php
function hello() {
    echo 'Hello, world!';
}
// hello();

function hello2($name = 'world') {
    echo 'Hello, ' . $name . '!';
}


$name = 'Andy';
// hello2($name);

echo '<hr>';

function jia($a, $b) {
    return $a + $b;
}

function jian($a, $b) {
    return $a - $b;
}

$x = 14;
$y = 12;
$z = 5;

// jia($x, $y);
// jian($y, $z);

// ($x + $z) - ($y + $x);

$r = jian(jia($x, $z), jia($y, $x));

echo $r;
?>
