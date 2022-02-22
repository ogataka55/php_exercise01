<?php

$poket_money = 1000;
$fund_raising = 101;

// ここに処理を記述
echo "あなたの所持金は{$poket_money}円です。<br>";

while ($fund_raising < $poket_money) {
    echo "{$fund_raising}円募金しました。<br>";
    $poket_money = $poket_money - $fund_raising;
    echo "残り残高は{$poket_money}円です。<br>";
}

echo "あなたはこれ以上募金できません。";
