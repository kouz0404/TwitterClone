<?php
 
// 設定を読み込み
include_once './config.php';
// 便利な関数を読み込み
include_once './util.php';
header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
    exit;