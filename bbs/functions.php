<?php
function findPosts($db, $section_id, $num = 6){
    $sql = "SELECT * FROM `post` WHERE `section_id`=".$section_id." ORDER BY `publish_at` DESC LIMIT 6";
    $result = mysqli_query($db, $sql);
    if (mysqli_errno($db) != 0) {
        // 处理错误
        die(mysqli_error($db));
    }
    // 取出全部数据到一个二维数组中
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}