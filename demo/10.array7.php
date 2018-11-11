<?php
$books = [
    [
        'name' => '靳先生，你老婆改嫁了',
        'author' => '林若夏',
        'category' => '都市情缘',
        'status' => '已完结',
        'desc' => '荣耀回国，一手儿子，一手新婚丈夫',
        'url' => 'http://vip.book.sina.com.cn/book/play/5402804-0.html?pos=20036',
        'cover' => 'http://vipbook.sinaedge.com/bookcover/pics/180/cover_4bf595dc3bdbe9950dd98fbe6e868b17.jpg?1526956365',
    ],
    [
        'name' => '鬼医毒妾',
        'author' => '北枝寒',
        'category' => '穿越重生',
        'status' => '连载中',
        'desc' => '庶妹抢婚，她惨遭下毒，当她再次醒来，她成了她…',
        'url' => 'http://vip.book.sina.com.cn/book/play/5366315-0.html?pos=20036',
        'cover' => 'http://vipbook.sinaedge.com/bookcover/pics/43/cover_ec1b77bf2730352e5f90fb2cbf49bb76.jpg?1535594976',
    ],
    [
        'name' => '你曾是我唯一',
        'author' => '卿筱',
        'category' => '都市情缘',
        'status' => '已完结',
        'desc' => '老公设计将她送给别的男人，竟是为了娶她姐姐！',
        'url' => 'http://vip.book.sina.com.cn/book/play/5351483-0.html?pos=20036',
        'cover' => 'http://vipbook.sinaedge.com/bookcover/pics/59/cover_54c430652f933a00bcb3626147d21be0.jpg',
    ],
    [
        'name' => '一吻成瘾：亿万总裁轻轻爱',
        'author' => '许墨城',
        'category' => '总裁豪门',
        'status' => '已完结',
        'desc' => '家道中落，她主动送上门却被嫌弃太嫩',
        'url' => 'http://vip.book.sina.com.cn/book/play/5386868-0.html?pos=20036',
        'cover' => 'http://vipbook.sinaedge.com/bookcover/pics/116/cover_1fed34fe71a3a7033cf28a9239ebfeb9.jpg?1491805471',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .girl-like {
            width: 80%;
            margin: 0 auto;
            background: #000;
            padding: 15px;
        }
        .list {
            list-style: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
        .list li {
            overflow: hidden;
            float: left;
            width: 50%;
            height: 180px;
            background: #fff;
            padding: 15px;
            box-sizing: border-box;
            border: 1px dashed #efefef;
        }
        .list li .cover {
            width: 30%;
            float: left;
            height: 100%;
            overflow: hidden;
        }
        .list li .cover img{
            height: 100%;
        }

        .list li .info{
            margin-left: 15px;
            float: left;
            width: 65%;
            height: 100%;
            position: relative;
        }
        p {
            font-size: 14px;
            line-height: 1;
            color: #999;
        }
        h2 {
            font-size: 18px;
            margin: 0;
        }
        .link {
            margin-top: 30px;
            position: absolute;
            bottom: 0;
        }
        .link a {
            text-decoration: none;
            color: #999;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="girl-like">
        <ul class="list">
            <?php foreach($books as $book):?>
            <li>
                <div class="cover">
                    <img src="<?=$book['cover']?>" alt="<?=$book['name']?>">
                </div>
                <div class="info">
                    <h2><?=$book['name']?></h2>
                    <p>作者: <span><?=$book['author']?></span></p>
                    <p><?=$book['category']?>【<?=$book['status']?>】</p>
                    <p><?=$book['desc']?></p>
                    <p class="link"><a href="<?=$book['url']?>">立即阅读></a></p>
                </div>
            </li>
            <?php endforeach?>
        </ul>
    </div>
</body>
</html>
