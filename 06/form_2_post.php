<?php

$name1 = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name1 = $_POST['message'];
}

if ($name1) {
    echo htmlspecialchars("私の名前は、{$name1}です。", ENT_QUOTES, 'UTF-8');
}
