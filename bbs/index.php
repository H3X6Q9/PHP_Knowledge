<?php
include 'functions.php';

$sections = [
    '1' => ['name' => 'Backend', 'image' => 'static/attaches/section_1.jpg'],
    '2' => ['name' => 'Frontend', 'image' => 'static/attaches/section_2.jpg'],
    '3' => ['name' => 'Database', 'image' => 'static/attaches/section_3.jpg'],
    '4' => ['name' => 'UI', 'image' => 'static/attaches/section_4.jpg'],
];

// 获取数据
// 1. 连接数据库 host,username,password,dbname
$db = @mysqli_connect('localhost', 'root','root','bbs');

if(mysqli_connect_errno() != 0){
    // 处理错误
    die(mysqli_connect_error());
}

// 查询版块数据
$data = [];
foreach($sections as $id => $section) {
    $data[$section['name']] = findPosts($db, $id);
}

// 查询最新8条
$sql = "SELECT * FROM `post` ORDER BY `publish_at` DESC LIMIT 8";
$result = mysqli_query($db, $sql);
if (mysqli_errno($db) != 0) {
    // 处理错误
    die(mysqli_error($db));
}
// 取出全部数据到一个二维数组中
$lasted = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 查询最热8条
$sql = "SELECT * FROM `post` ORDER BY `views` DESC LIMIT 8";
$result = mysqli_query($db, $sql);
if (mysqli_errno($db) != 0) {
    // 处理错误
    die(mysqli_error($db));
}
// 取出全部数据到一个二维数组中
$hots = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($data);

// 渲染数据
include 'views/index.html';
