<?php
// 接收表单数据
$account = $_POST['account'];
$name = $_POST['name'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$Email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
echo"1";
// 检查密码是否一致
if ($password == $password2) {
    // 引入数据库连接
    $connect = require_once "website_db_setting.php";
    echo"2";
    // 构建并执行SQL语句
    
    $sql = "INSERT INTO website_user (user_account, user_password, user_name, user_email, user_phone, user_birthday, user_admin) 
            VALUES ('$account', '$password', '$name', '$Email', '$phone', '$birthday', '0')";
    echo"3";
    // 检查数据库连接是否成功
    if (!$connect) {
        echo "ERROR: Could not connect. " . mysqli_connect_error();
    } else {
        // 执行SQL语句并输出结果
        if (mysqli_query($connect, $sql)) {
            echo "insert success<br>";
        } else {
            echo "insert fail<br>";
        }
    }

    // 关闭数据库连接
    mysqli_close($connect);
    echo"4";
    header("refresh: 3; url=login_page.php");
} else {
    echo "密碼確認不一致";
    header("refresh: 3; url=register_page.php");
} 
?>
