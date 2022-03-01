<?php

$score = '';
$err_msg = '';
$ok_msg = '合格です';
$ng_msg = '不合格です';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];

    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    }
    if ($score >= 60) {
        header("Location: judge_ment.php?judge_ment={$ok_msg}");
        exit;
    }
    if ($score && $score < 60) {
        header("Location: judge_ment.php?judge_ment={$ng_msg}");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <?php if ($err_msg) : ?>
        <h1>点数を入力してください</h1>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php elseif (empty($score)) : ?>
        <h1>点数を入力してください</h1>
    <?php endif; ?>
    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>