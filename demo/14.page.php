<?php
$half = 2;
$pagesize = 3;
$total = 3;
$page = 2;
// 上一页12345...10下一页
// 上一页  1  ... 456 ... 10 下一页
$start = $page - $half;
$end = $page + $half;
$start = $start < 1 ? 1 : $start;
$end = $end > $total ? $total : $end;

echo '上一页';

if($start != 1) {
    echo '1';
}
if($start - 1 > 1) {
    echo '...';
}
for($i = $start; $i<=$end; $i++) {
    if($i == $page) {
        echo '<span style="color:red">'.$i.'</span>';
    } else {
        echo $i;
    }
    echo '|';
}
if($end + 1 < $total) {
    echo '...';
}
if($end != $total) {
    echo $total;
}
echo '下一页'
?>
