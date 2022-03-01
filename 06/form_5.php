<?php
$f_num = '';
$s_num = '';
$t_num = '';
$sum = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $f_num = $_POST['f_num'];
    $s_num = $_POST['s_num'];
    $t_num = $_POST['t_num'];
    $sum = (int)$f_num + (int)$s_num + (int)$t_num;

    // バリデーション
    if (empty($f_num) || empty($s_num) || empty($t_num)) {
        $err_msg = '全てに数字を入力してください';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>5.複数のフォーム</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つめの数字</label><br>
            <input type="text" name="f_num" value="<?= $f_num ?>">
        </div>
        <div>
            <label for="">2つめの数字</label><br>
            <input type="text" name="s_num" value="<?= $s_num ?>">
        </div>
        <div>
            <label for="">3つめの数字</label><br>
            <input type="text" name="t_num" value="<?= $t_num ?>">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if ($f_num && $s_num && $t_num) { ?>
        <p><?= htmlspecialchars("合計値は{$sum}です", ENT_QUOTES, 'UTF-8') ?></p>
    <?php } ?>
</body>

</html>