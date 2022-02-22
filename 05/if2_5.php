<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述
foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            echo '数学の試験は明日です。<br>';
            break;
        case '英語':
            echo '英語の試験は明後日です。<br>';
            break;
        case '理科':
            echo '理科の試験は明々後日です。<br>';
            break;
        case '社会':
            echo '社会の試験は昨日です。<br>';
            break;
        case '国語':
            echo '国語の試験は中止です。<br>';
            break;
    }
}
