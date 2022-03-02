<?php

function check_temperature($body_temperature)
{
    if ($body_temperature < 37) {
        return true;
    } else {
        return false;
    }
}

function create_message($body_temperature)
{
    if (check_temperature($body_temperature)) {
        return 'あなたは平熱なので、問題なく参加できます ';
    } else {
        return 'あなたは発熱しているので、参加できません';
    }
}

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $body_temperature = $_POST['body_temperature'];

    $msg = create_message($body_temperature);
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
    <?php if ($msg) : ?>
        <h1><?= $msg ?></h1>
    <?php endif; ?>
    <h2>体温を入力してください</h2>
    <form action="" method="post">
        <input type="number" step="0.1" name="body_temperature" required>
        <input type="submit" value="送信">
    </form>
</body>

</html>