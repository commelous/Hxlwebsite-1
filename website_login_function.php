<!DOCTYPE html>
<head>
   <title>login_function</title>
</head>
<body>
<?php
   $connect = require_once "website_db_setting.php";

   session_start();
   $login_account = $_POST['username'];
   $login_password = $_POST['password'];
   echo"1";
                
   $sql = "SELECT distinct * FROM website_user WHERE user_account=? AND user_password=?";
  //  $sql = "select distinct * from website_user where user_id='$login_account' and user_password='$login_password'";
   echo"2";
   $stmt = mysqli_prepare($connect, $sql);
   mysqli_stmt_bind_param($stmt, "ss", $login_account, $login_password);
   mysqli_stmt_execute($stmt);
  //  $result = mysqli_query($connect , $sql);
  $result = mysqli_stmt_get_result($stmt);
   echo"3";
   if($row = mysqli_fetch_assoc($result))
   {
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['user_account']=$login_account;
    $_SESSION['name']=$row['user_name'];
    $_SESSION['password']=$row['user_password'];
    $_SESSION['Email']=$row['user_email'];
    $_SESSION['phone']=$row['user_phone'];
    $_SESSION['birthday'] = $row['user_birthday'];
    $_SESSION['admin'] = $row['user_admin'];
    if($_SESSION['admin'] == '1'){
      header("Location:index_side_bar.php");
      exit;
    }
    elseif($_SESSION['admin'] == '0'){
      header("Location:index_side_bar.php");
      exit;
    }
   }
   else
   {
    echo"查無此帳號密碼";
   }
   mysqli_stmt_close($stmt);
   mysqli_close($connect);

?>
</body>