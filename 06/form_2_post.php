<?php

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
}

if ($msg) {
    echo htmlspecialchars("私の名前は、{$msg}です。", ENT_QUOTES, 'UTF-8');
}
