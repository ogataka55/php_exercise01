<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $select_stylist = $_POST['stylist'];
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
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <?php foreach ($stylists as $sty => $select_sty) : ?>
                <option value="<?= $select_sty ?>"><?= $sty ?></option>
            <?php endforeach; ?>
            <!--foreach ループを終えた後でも、$valueは配列の最後の要素を参照したままなので要注意 -->
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <?php if ($select_stylist) : ?>
        <p><?= htmlspecialchars("あなたの担当は{$select_stylist}です", ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
</body>

</html>