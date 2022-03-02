<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item'];

    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    } elseif (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    } elseif (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    } elseif ($name && $tel && $email) {
        header("Location: confirm.php?purchase_item={$item_key}");
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
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>
    <?php if ($err_msgs) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <div>
            <label for="name">氏名</label><br>
            <input type="text" name="name" id="name" value="<?= $name ?>">
        </div>
        <div>
            <label for="tel">電話番号</label><br>
            <input type="number" name="tel" id="tel" value="<?= $tel ?>">
        </div>
        <div>
            <label for="email">メールアドレス</label><br>
            <input type="text" name="email" id="email" value="<?= $email ?>">
        </div>

        <h3>購入するものを選択してください</h3>

        <select name="item">
            <?php foreach ($items as $item) : ?>
                <option value="<?= $item ?>" <?php if (!empty($_POST['item']) && $_POST['item'] === "{$item}") {
                                                    echo 'selected';
                                                } ?>><?= $item ?></option>
                <!--POSTされたものと同じ要素にselected属性を付与 -->
            <?php endforeach; ?>
        </select>
        <br><br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

</body>

</html>