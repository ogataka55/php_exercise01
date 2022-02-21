<?php

$num = 1;

// ここに処理を記述
if ($num == 1) {
    echo "{$num}は素数ではありません。";
} elseif ($num == 2) {
    echo "{$num}は素数です。";
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo "{$num}は素数ではありません。";
            break;
        } elseif ($i == $num - 1) {
            echo "{$num}は素数です。";
        }
    }
}
