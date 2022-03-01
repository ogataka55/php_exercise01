<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];
$err_msg = '';

switch ($operator) {
    case 'addition':
        $sum = $num1 + $num2;
        $sum_sym = '+';
        break;
    case 'subtraction':
        $sum = $num1 - $num2;
        $sum_sym = '-';
        break;
    case 'multiplication':
        $sum = $num1 * $num2;
        $sum_sym = '*';
        break;
    case 'division':
        $sum = $num1 / $num2;
        $sum_sym = '/';
        break;
    default:
        $err_msg = '正しい演算子を指定して下さい';
        break;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4.GETメソッド</title>
</head>

<?php if ($err_msg) : ?>
    <p><?= htmlspecialchars($err_msg, ENT_QUOTES, 'UTF-8') ?></p>
<?php else : ?>
    <p><?= htmlspecialchars("{$num1} {$sum_sym} {$num2} = {$sum}", ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>