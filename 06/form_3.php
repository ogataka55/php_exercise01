<?php
$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $age = $_POST['message'];

    // バリデーション
    if (empty($age)) {
        $err_msg = '年齢を入力してください。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>3.バリデーションの作成</title>
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
            <label for="age">年齢</label><br>
            <input type="text" name="message" id="age" value="<?= $age ?>">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if ($age) { ?>
        <p><?= htmlspecialchars("私は{$age}歳です", ENT_QUOTES, 'UTF-8') ?></p>
    <?php } ?>
</body>

</html>