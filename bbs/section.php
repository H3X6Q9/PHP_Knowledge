<?php
$section_id = $_GET['sid'];

// 获取数据
// 1. 连接数据库 host,username,password,dbname
$db = @mysqli_connect('localhost', 'root','root','bbs');

if(mysqli_connect_errno() != 0){
    // 处理错误
    die(mysqli_connect_error());
}

// 获取记录总数
$pagesize = 3;
$sql = "SELECT COUNT(`id`) AS total FROM `post` WHERE `section_id`=" . $section_id;
$result = mysqli_query($db, $sql);
if (mysqli_errno($db) != 0) {
    // 处理错误
    die(mysqli_error($db));
}
// 取出全部数据到一个二维数组中
$total = mysqli_fetch_all($result, MYSQLI_ASSOC);
$total = $total[0]['total'];
$totalPages = ceil($total / $pagesize);
// 获取当前页码
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $pagesize;

// 获取版块下的帖子
$sql = "SELECT * FROM `post` WHERE `section_id`=" . $section_id ." ORDER BY `publish_at` DESC LIMIT 3 OFFSET " . $offset;
$result = mysqli_query($db, $sql);
if (mysqli_errno($db) != 0) {
    // 处理错误
    die(mysqli_error($db));
}
// 取出全部数据到一个二维数组中
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 截取内容作为摘要
// mb_substr(strip_tags($post['content']), 0, 80)

include 'views/section.html';