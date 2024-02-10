<?php
    // 定義連線參數
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'hxl_website');

    // 資料庫連線
    $connect = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    

    // 設定中文編碼
    mysqli_query($connect, 'SET NAMES utf8');

    // 檢查連線
    if(!$connect)
        die("ERROR: Could not connect. " . mysqli_connect_error());
    else{
        echo "Connected!";
        return $connect;
    }
?>