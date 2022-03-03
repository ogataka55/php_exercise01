<?php

//配列を使用し、要素順に(日:0〜土:6)を設定
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
];
$push = '';
$date = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = date('Y年m月d日');
    $msg_dow = $week[date('w')];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (empty($date)) : ?>
        <h2>本日の日付、曜日を確認しますか？</h2>
        <form action="" method="post">
            <input type="submit" value="はい">
        </form>
    <?php else: ?>
        <h1>今日は、<?= $date ?><?= $msg_dow ?>曜日です</h1>
        <a href="function_5.php">戻る</a>
    <?php endif; ?>
</body>

</html>