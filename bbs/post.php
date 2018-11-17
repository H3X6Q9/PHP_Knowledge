<?php
// 获取帖子详情数据
$id = $_GET['id'];

// 获取数据
// 1. 连接数据库 host,username,password,dbname
$db = @mysqli_connect('localhost', 'root','root','bbs');

if(mysqli_connect_errno() != 0){
    // 处理错误
    die(mysqli_connect_error());
}

$sql = "SELECT * FROM  `post` WHERE `id`=" . $id;
$result = mysqli_query($db, $sql);
if (mysqli_errno($db) != 0) {
    // 处理错误
    die(mysqli_error($db));
}
$post = mysqli_fetch_assoc($result);

//print_r($post);

// 获取跟帖
$sql = "SELECT * FROM  `thread` WHERE `post_id`=" . $id;
$result = mysqli_query($db, $sql);
if (mysqli_errno($db) != 0) {
    // 处理错误
    die(mysqli_error($db));
}

$threads = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($threads);

include 'views/post.html';