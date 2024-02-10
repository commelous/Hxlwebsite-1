<!DOCTYPE html>
<head>

</head>
<body>
<?php
   session_start();

   $connect = require_once "website_db_setting.php";
   
   $user_id = $_SESSION['user_id'];
   $user_account = $_SESSION['user_account'];
   $user_account = $_POST['user_account'];
   $password = $_POST['user_password'];
   $password2 = $_POST['user_password2'];
   $user_name = $_POST['user_name'];
   $user_phone = $_POST['user_phone'];
   $user_email = $_POST['user_email'];
   $user_birthday = $_POST['user_birthday'];

   if($password != $password2){
       echo"密碼不一致";
       header("refresh: 2; url=profile_edit_page.php");
   }
   else{
  
   $sql = "UPDATE website_user SET 
   user_password = '$password', 
   user_name = '$user_name', 
   user_phone = '$user_phone', 
   user_email = '$user_email', 
   user_birthday = '$user_birthday',
   user_account = '$user_account'
   WHERE user_id = '$user_id'";
   

   $result = mysqli_query($connect, $sql);
   
    $_SESSION['user_id']=$user_id;
    $_SESSION['user_account']=$user_account;
    $_SESSION['name']=$user_name;
    $_SESSION['password']=$password;
    $_SESSION['Email']=$user_email;
    $_SESSION['phone']=$user_phone;
    $_SESSION['birthday'] = $user_birthday;
    

}
    if(!$connect){
        echo "ERROR: Could not connect. " . mysqli_connect_error();
    }
    else{
        if(mysqli_query($connect, $sql)){
            echo "<center><h1>修改成功</h1></center>";
        }
        else{
            echo "<center><h1>修改失敗</h1></center><br>";
        }
    } 
    mysqli_close($connect);

    header("refresh: 0.5; url=index_side_bar.php?menu=profile");
?>
</body>
